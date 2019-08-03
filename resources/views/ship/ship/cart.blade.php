@extends('templates.ship.master')
@section('content')
<!-- =======================
	Banner innerpage -->
<div class="innerpage-banner left bg-overlay-dark-7 py-7" style="background:url(/templates/ship/images/07.jpg) repeat; background-size:cover;">
  <div class="container">
    <div class="row all-text-white">
      <div class="col-md-12 align-self-center">
        <h1 class="innerpage-title">Tiến hành thanh toán</h1>
        <h6 class="subtitle">Thanh toán đơn hàng để nhận được vé tàu Lý Sơn điện tử</h6>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="index.html"><i class="ti-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item">Thanh toán</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- =======================
	Banner innerpage -->

<section class="pt80 pb80 booking-section login-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="login-box Booking-box">
              <h2>1. Kiểm tra hóa đơn cần thanh toán</h2>
              <p>Hãy kiểm tra hoa đơn bạn cần phải thanh toán cho đặt vé tàu đi du lịch tại đảo Lý Sơn</p>
              <div class="table-responsive-sm pt30">
                <form method="post" action="{{ route('ship.ship.updateCart') }}">
                  {{ csrf_field() }}
                <table class="table table-lg table-noborder table-striped">
                  <thead class="all-text-white bg-grad">
                    <tr>
                      <th scope="col">Vé tàu</th>
                      <th scope="col">Số vé</th>
                      <th scope="col">Giá tiền</th>
                      <th scope="col">Chức năng</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $ticket = 0;
                      $payment = 0;
                    @endphp
                    @foreach(Session::get('cart') as $carts)
                    @php
                      $payment += $carts['cost']*$carts['ticket'];
                      $ticket += $carts['ticket'];
                    @endphp
                      <tr id="cart-{{ $carts['id'] }}">
                        <td><span style="font-size:18px;font-weight:600">{{ $carts['train_from'] }} - {{ $carts['train_to'] }}</span><br>Đi {{ $carts['time'] }} {{ $carts['date'] }}</td>
                        <td>
                            <input onchange="changeCost({{ $carts['id'] }},{{ $carts['cost'] }}, {{ $carts['ticket'] }})" id="ticket-{{ $carts['id'] }}" type="number" name="ticket-{{ $carts['id'] }}" value="{{ $carts['ticket'] }}" />
                        </td>
                        <td id="demo-{{ $carts['id'] }}">{{ number_format($carts['cost']*$carts['ticket'], 0, ',', '.'). ' VND' }}</td>
                        <td><button type="submit" onclick="deleteTicket({{ $carts['id'] }})" class="btn btn-danger">Xóa</button></td>
                      </tr>
                    @endforeach
                    <tr>
                      <td><span style="font-size:18px;font-weight:600">Tổng cộng</span></td>
                      <td><span style="font-size:18px;font-weight:600">{{ $ticket }}</td>
                      <td colspan="2"><span style="font-size:18px;font-weight:600">{{ number_format($payment, 0, ',', '.') }} VND</td>
                    </tr>
                    <tr>
                      <td colspan="3">
                        <button type="submit" class="bg-grad trip-button-book" style="float: left">Cập nhật</button>
                        <a href="/" class="bg-grad trip-button-book" style="float: right">Mua thêm vé</a>
                      </td>
                    </tr>
                  </tbody>
                  </form>
                </table>
              </div>            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 pt30">
            <div class="login-box Booking-box">
              <div class="login-top">
                <h2>2. Điền thông tin thanh toán</h2>
                <p>Hãy nhập đầy đủ thông tin của bạn.</p>
              </div>
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
              <form class="login-form" action="{{ route('ship.ship.payment') }}" method="post" id="infomation">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12 email">
                    <label>Họ và tên</label>
                    <input type="text" name="name" placeholder="Nhập họ và tên">
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 email">
                    <label>Số CMND</label>
                    <input type="text" name="cmnd" placeholder="Nhập số chứng minh nhân dân">
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 email">
                    <label>Địa chỉ email</label>
                    <input type="text" name="email" placeholder="Nhập địa chỉ email">
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 password">
                    <label>Số điện thoại</label>
                    <input type="number" name="phone" placeholder="Nhập số điện thoại">
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 email">
                    <label>Hình thức thanh toán</label>
                    <select class="custom-select select-big mb-3" name="type">
                      <option value="Chuyển khoản ngân hàng">Chuyển khoản ngân hàng</option>
                      <option value="Chuyển khoản momo">Chuyển khoản momo</option>
                    </select>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="accordion" id="accordion1"> 
                      <!-- item -->
                      <div class="accordion-item">
                        <div class="accordion-title"> <a class="h6 mb-0" data-toggle="collapse" href="#collapse-1">Chuyển khoản ngân hàng</a> </div>
                        <div class="collapse show" id="collapse-1" data-parent="#accordion1">
                          <div class="accordion-content">
                            <p>Ngân hàng Vietcombank</p>
                            <p><strong>Số tài khoản</strong> 1001000289446</p>
                            <p><strong>Tên chủ tài khoản:</strong> Lê Hồng Phong</p>
                            <p><strong>Chi nhánh:</strong> Ngũ Hành Sơn - Đà Nẵng</p>
                          </div>
                        </div>
                      </div>
                      <!-- item -->
                      <div class="accordion-item">
                        <div class="accordion-title"> <a class="h6 mb-0" data-toggle="collapse" href="#collapse-1">Ví điện tử</a> </div>
                        <div class="collapse show" id="collapse-1" data-parent="#accordion1">
                          <div class="accordion-content">
                            <p>Ví điện tử MOMO</p>
                            <p><strong>Số điện thoại:</strong> 032.8811.678</p>
                            <p><strong>Tên chủ tài khoản:</strong> Lê Hồng Phong</p>
                          </div>
                        </div>
                      </div>
                      <!-- item -->
                    </div>

                  </div>

                  <div class="col-md-12">
                    <button class="Confirm" type="submit" name="button">Đặt vé</button>
                  </div>
                </div>
              </form>
            </div>
          </div>   
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-order-2">
        <div class="login-box Booking-box" style="padding:10px;">
          <div class="login-top">
            <h2>Hỗ trợ online</h2>
            <p>Thanh toán theo 1 trong 2 hình thức bên dưới để được nhận vé điện tử.</p>
          </div>
          <div class="NeedhelpSection">
            <ul>
              <li><span><i class="fas fa-phone-volume"></i></span>0935.091.684</li>
              <li><span><i class="far fa-envelope"></i></span> muavetaulyson@gmail.com</li>
              <li><span><i class="fab fa-skype"></i> </span> taiembkdn@gmail.com</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  function changeCost(id, cost, allticket){
    var ticket = 'ticket-' + id;
    var time = 'demo-' + id;
    var x = document.getElementById(ticket).value;
    document.getElementById(time).innerHTML = (x*cost).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')+ ' VND';

  }
  $('#infomation').submit(function(){
    $('input[type=submit]').addClass("disabled");
});
</script>

<script type="text/javascript">
    function deleteTicket(id){
        $.ajax({
          url: "{{ route('ajax.ship.delete') }}",
          type: 'GET',
          cache: false,
          data: {
                id: id,
            },
          success: function(data){
            console.log('success')
            $('#cart-'+id).html(data);
          }, 
          error: function() {
           alert("Có lỗi");
         }
       }); 
        return false;
      } 
</script>
@stop