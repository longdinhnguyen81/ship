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
                <table class="table table-lg table-noborder table-striped">
                  <thead class="all-text-white bg-grad">
                    <tr>
                      <th scope="col">Vé tàu</th>
                      <th scope="col">Số vé</th>
                      <th scope="col">Giá tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span style="font-size:18px;font-weight:600">Sa Kỳ - Lý Sơn</span><br>Đi 14h 19/07/2019</td>
                      <td>2</td>
                      <td>3,000,000</td>
                    </tr>
                    <tr>
                      <td><span style="font-size:18px;font-weight:600">Sa Kỳ - Lý Sơn</span><br>Đi 14h 19/07/2019</td>
                      <td>5</td>
                      <td>3,000,000</td>
                    </tr>
                    <tr>
                      <td><span style="font-size:18px;font-weight:600">Tổng cộng</span></td>
                      <td><span style="font-size:18px;font-weight:600">7</td>
                      <td><span style="font-size:18px;font-weight:600">6,000,000đ</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="pt30">
                <h5><span style="float:left">Quanh lại giỏ hàng</span><span style="float:right">Mua thêm vé</span></h5>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 pt30">
            <div class="login-box Booking-box">
              <div class="login-top">
                <h2>2. Điền thông tin thanh toán</h2>
                <p>Hãy nhập đầy đủ thông tin của bạn.</p>
              </div>
              <form class="login-form" action="#">
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
                    <input type="text" name="text" placeholder="Nhập số điện thoại">
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 email">
                    <label>Hình thức thanh toán</label>
                    <select class="custom-select select-big mb-3">
                      <option value="location3">Chuyển khoản ngân hàng</option>
                      <option value="location5">Chuyển khoản momo</option>
                    </select>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="accordion" id="accordion1"> 
                      <!-- item -->
                      <div class="accordion-item">
                        <div class="accordion-title"> <a class="h6 mb-0" data-toggle="collapse" href="#collapse-1">Chuyển khoản ngân hàng</a> </div>
                        <div class="collapse show" id="collapse-1" data-parent="#accordion1">
                          <div class="accordion-content">Duis aliquam hendrerit risus, sed mollis nulla luctus sit amet. Sed et magna efficitur, viverra nisl nec, rhoncus nisi. Duis nec vehicula felis. Aenean turpis lectus, cursus ac sem vel, consequat scelerisque ipsum. Donec non interdum lorem. Nulla facilisi. Fusce iaculis ex sed nulla commodo imperdiet. Proin sed rhoncus ligula, sit amet euismod augue. </div>
                        </div>
                      </div>
                      <!-- item -->
                      <div class="accordion-item">
                        <div class="accordion-title"> <a class="collapsed" data-toggle="collapse" href="#collapse-2">Ví điện tử</a> </div>
                        <div class="collapse" id="collapse-2" data-parent="#accordion1">
                          <div class="accordion-content"> Duis aliquam hendrerit risus, sed mollis nulla luctus sit amet. Sed et magna efficitur, viverra nisl nec, rhoncus nisi. Duis nec vehicula felis. Aenean turpis lectus, cursus ac sem vel, consequat scelerisque ipsum. Donec non interdum lorem. Nulla facilisi. Fusce iaculis ex sed nulla commodo imperdiet. Proin sed rhoncus ligula, sit amet euismod augue.</div>
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

@stop