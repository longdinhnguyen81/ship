@extends('templates.ship.master')
@section('content')
	

<!-- =======================
	Banner innerpage -->
<div class="innerpage-banner left bg-overlay-dark-7 py-7" style="background:url(/templates/ship/images/07.jpg) repeat; background-size:cover;">
  <div class="container">
    <div class="row all-text-white">
      <div class="col-md-12 align-self-center">
        <h1 class="innerpage-title">Đặt vé thành công</h1>
        <h6 class="subtitle">Xác nhận đặt vé thành công từ hệ thống, hãy kiểm tra gmail để xem chi tiết.</h6>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/"><i class="ti-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item">Đặt vé thành công</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- =======================
	Banner innerpage -->
@php
  $checkout = Session::get('checkout');
  $carts = Session::get('cart');
@endphp
<section class="pt80 pb60 booking-section login-area thanksYou">
  <div class="container">
    <div class="row">
  <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="login-box Booking-box">
              <div class="login-top">
                <h2 class="h2">Kiểm tra thông tin đơn hàng</h2>
                <p>Đơn hàng của bạn sẽ được gửi qua email.</p>
              </div>         
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td colspan="2" class="bookex">Hóa đơn số:</td>
                    <td colspan="2" >#TAULYSON{{ $checkout['id'] }}</td>
                  </tr>
                  <tr>
                    <td colspan="2"  class="bookex">Họ và tên:</td>
                    <td colspan="2" >{{ $checkout['fullname'] }}</td>
                  </tr>
                  <tr>
                    <td colspan="2"  class="bookex">Địa chỉ email:</td>
                    <td colspan="2" >{{ $checkout['email'] }}</td>
                  </tr>
                  <tr>
                    <td colspan="2"  class="bookex">Số điện thoại:</td>
                    <td colspan="2" >{{ $checkout['phone'] }}</td>
                  </tr>
                  <tr>
                    <td colspan="2"  class="bookex">Hình thức thanh toán:</td>
                    <td colspan="2" >{{ $checkout['type'] }}</td>
                  </tr>
                   <tr>
                    <td class="bookex font-weight-bold color-black" colspan="2">Các vé tàu đã đặt:</td>
                  </tr>                 
                  <hr />
                   <tr>
                    <td class="bookex">Tên tàu:</td>
                    <td class="bookex">Số vé:</td>
                    <td class="bookex">Chiều đi:</td>
                    <td class="bookex">Giá tiền:</td>
                  </tr>             
                  @php
                    $all = 0;
                  @endphp
                  @foreach($carts as $cart)
                  @php
                    $all += $cart['ticket']*$cart['cost'];
                  @endphp
                  <tr>
                    <td>{{ $cart['name'] }}</td>
                    <td>{{ $cart['ticket'] }}</td>
                    <td> {{ $cart['train_from'] }} - {{ $cart['train_to'] }}</td>
                    <td> {{ number_format($cart['ticket']*$cart['cost'],0,',','.') }} VND</td>
                  </tr>                  
                  @endforeach     
                  
                  <tr>
                    <td class="bookex font-weight-bold color-black text-center" colspan="3">Tổng tiền</td>
                    <td>{{ number_format($all, 0, ',', '.') }} VND</td>
                  </tr>
                  
                </tbody>
              </table>          
            
              <div class="login-top mt-5">
                <h2 class="h2">Các hình thức thanh toán</h2>
              </div>         
            
            
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
                            <p><strong>Ghi chú:</strong> #TAULYSON{{ $checkout['id'] }}</p>
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
                            <p><strong>Ghi chú:</strong> #TAULYSON{{ $checkout['id'] }}</p>
                          </div>
                        </div>
                      </div>
                      <!-- item -->
                    </div>
              </div>
            
          </div>
        </div>
      </div>  
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="login-box Booking-box" style="padding:10px;">
          <div class="login-top">
            <h2>Hỗ trợ online</h2>
            <p>Thanh toán theo 1 trong 2 hình thức bên dưới để được nhận vé điện tử.</p>
          </div>
          <div class="NeedhelpSection">
            <ul>
              <li><span><i class="fas fa-phone-volume"></i></span>032.8811.678</li>
              <li><span><i class="far fa-envelope"></i></span> lehongphongcntt@gmail.com</li>
              <li><span><i class="fab fa-skype"></i> </span> lehongphongcntt@gmail.com</li>
            </ul>
          </div>
        </div>
      
    </div>
  </div>
</section>
@php
  Session::forget('cart');
  Session::forget('checkout');
@endphp
@stop