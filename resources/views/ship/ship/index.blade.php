@extends('templates.ship.master')
@section('content')
	
<!-- =======================
	Banner innerpage -->
<div class="innerpage-banner left bg-overlay-dark-7 py-7" style="background:url(/templates/ship/images/07.jpg) repeat; background-size:cover;">
  <div class="container">
    <div class="row all-text-white">
      <div class="col-md-12 align-self-center">
        <h1 class="innerpage-title">Kết quả tìm kiếm vé tàu Lý Sơn Sa Kỳ</h1>
        <p class="subtitle">Đặt vé tàu online cảng sa kỳ đi Lý Sơn trong vòng 5 phút</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="index.html"><i class="ti-home"></i>Trang Chủ</a></li>
            <li class="breadcrumb-item">Tìm kiếm vé tàu</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- =======================
	Banner innerpage -->

<section class="pt80 pb80 cruise-grid-view">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="Filter-left">
          <h2>Tìm kiếm vé tàu đi Lý Sơn Online</h2>
          <form action="#" autocomplete="off" >
            <div class="mb-left">
              <label for="form_type" class="form-label">Lựa chọn chuyến đi</label>
              <select class="custom-select select-big ">
                <option value="type_0">Entire place </option>
                <option value="type_1">Private room </option>
                <option value="type_2">Shared room </option>
              </select>
            </div>
            <div class="mb-left">
              <label for="form_dates" class="form-label">Ngày đi</label>
              <div class="form-group">
                <input class="form-control" type="text" id="datepicker" autocomplete="off" placeholder="Choose your dates">
              </div>
            </div>
            <div class="mb-left">
              <label for="form_guests" class="form-label">Số ghế</label>
              <select class="custom-select select-big ">
                <option selected="">Guests</option>
                <option value="guests_0">01 </option>
                <option value="guests_1">02 </option>
                <option value="guests_2">03 </option>
                <option value="guests_3">04 </option>
                <option value="guests_4">05 </option>
              </select>
            </div>
            <div class="pb-left">
              <div id="moreFilters" class="collapse show">
              </div>
              <div class="mb-left">
                <button type="submit" class="btn bg-grad btn-grad FilterBtn"> <i class="fas fa-filter mr-1"></i>Tìm kiếm</button>
              </div>
            </div>
          </form>
        </div>
        <div class="pt20">
          <img src="/templates/ship/images/banner-quang-cao.jpg" class="img-fluid" alt="" >
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="resultBar pt10">
          <h3 class="txt-20">Tìm thấy 10 chuyến tàu trong ngày 18-07-2019</h3>
        </div>
        <!-- Item vé tàu-->
        <div class="row box-trip">
          <div class="col-12 col-sm-6 col-md-6">
            <p><span class="trip-time-start">18h00</span><span class="trip-location">Đảo Lý Sơn</span></p>
            <p><span class="trip-time-start">18h30</span><span class="trip-location">Cảng Sa Kỳ</span></p>
            <p><i class="fas fa-location-arrow trip-brand-icon"></i><span class="trip-brand">Tàu An Vĩnh Express 1</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <p class="trip-price">170,000<span class="trip-price-d">đ</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <a href="#" class="bg-grad trip-button-book">Chọn vé</a>
          </div>
        </div>
        <!-- Item vé tàu-->
        <div class="row box-trip">
          <div class="col-12 col-sm-6 col-md-6">
            <p><span class="trip-time-start">19h00</span><span class="trip-location">Đảo Lý Sơn</span></p>
            <p><span class="trip-time-start">19h35</span><span class="trip-location">Cảng Sa Kỳ</span></p>
            <p><i class="fas fa-location-arrow trip-brand-icon"></i><span class="trip-brand">Tàu Super biển đông 1</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <p class="trip-price">168,000<span class="trip-price-d">đ</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <a href="#" class="bg-grad trip-button-book">Chọn vé</a>
          </div>
        </div>
        <!-- Item vé tàu-->
        <div class="row box-trip">
          <div class="col-12 col-sm-6 col-md-6">
            <p><span class="trip-time-start">18h00</span><span class="trip-location">Đảo Lý Sơn</span></p>
            <p><span class="trip-time-start">18h30</span><span class="trip-location">Cảng Sa Kỳ</span></p>
            <p><i class="fas fa-location-arrow trip-brand-icon"></i><span class="trip-brand">Tàu An Vĩnh Express 1</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <p class="trip-price">170,000<span class="trip-price-d">đ</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <a href="#" class="bg-grad trip-button-book">Chọn vé</a>
          </div>
        </div>
        <!-- Item vé tàu-->
        <div class="row box-trip">
          <div class="col-12 col-sm-6 col-md-6">
            <p><span class="trip-time-start">19h00</span><span class="trip-location">Đảo Lý Sơn</span></p>
            <p><span class="trip-time-start">19h35</span><span class="trip-location">Cảng Sa Kỳ</span></p>
            <p><i class="fas fa-location-arrow trip-brand-icon"></i><span class="trip-brand">Tàu Super biển đông 1</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <p class="trip-price">168,000<span class="trip-price-d">đ</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <a href="#" class="bg-grad trip-button-book">Chọn vé</a>
          </div>
        </div>
        <!-- Item vé tàu-->
        <div class="row box-trip">
          <div class="col-12 col-sm-6 col-md-6">
            <p><span class="trip-time-start">18h00</span><span class="trip-location">Đảo Lý Sơn</span></p>
            <p><span class="trip-time-start">18h30</span><span class="trip-location">Cảng Sa Kỳ</span></p>
            <p><i class="fas fa-location-arrow trip-brand-icon"></i><span class="trip-brand">Tàu An Vĩnh Express 1</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <p class="trip-price">170,000<span class="trip-price-d">đ</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <a href="#" class="bg-grad trip-button-book">Chọn vé</a>
          </div>
        </div>
        <!-- Item vé tàu-->
        <div class="row box-trip">
          <div class="col-12 col-sm-6 col-md-6">
            <p><span class="trip-time-start">19h00</span><span class="trip-location">Đảo Lý Sơn</span></p>
            <p><span class="trip-time-start">19h35</span><span class="trip-location">Cảng Sa Kỳ</span></p>
            <p><i class="fas fa-location-arrow trip-brand-icon"></i><span class="trip-brand">Tàu Super biển đông 1</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <p class="trip-price">168,000<span class="trip-price-d">đ</span></p>
          </div>
          <div class="col-6 col-sm-3 col-md-3 p10">
              <a href="#" class="bg-grad trip-button-book">Chọn vé</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =======================
	newsletter -->
<!-- Hướng dẫn đặt vé -->
<section class="pt80 pb80" style="background-color:#fdfdfd">
  <div class="container ">
    <div class="row">
      <div class="col-md-8 mx-auto text-center mb-5">
        <h2 class="title text-center">Đặt vé tàu du lịch Lý Sơn dễ dàng</h2>
        <p>Để du lịch Lý Sơn, các bạn cần đặt trước vé tàu để có thể ra vào đảo. Tại đây chưa đến 5p, các bạn đã có ngay vé tàu của riêng mình để đi du lịch Lý Sơn. Lưu ý nên đặt vé trước 3 ngày để đảm bảo còn vé du lịch</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="feature-box h-100 text-center px-4 py-5">
          <div class="feature-box-icon"><img class="w-25" src="/templates/ship/images/tour/check-mark.svg" alt=""></div>
          <h3 class="feature-box-title">1. Chọn vé tàu</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros eu tristique dictum, neque lorem laoreet purus</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box h-100 text-center all-text-white bg-grad px-4 py-5 border-radius-3" style="background-color:#5bc9c2!important">
          <div class="feature-box-icon"><img class="w-25" src="/templates/ship/images/tour/editor.svg" alt=""></div>
          <h3 class="feature-box-title">2. Điền thông tin</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros eu tristique dictum, neque lorem laoreet</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box h-100 text-center px-4 py-5">
          <div class="feature-box-icon"><img class="w-25" src="/templates/ship/images/tour/envelope.svg" alt=""></div>
          <h3 class="feature-box-title">3. Thanh toán</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros eu tristique dictum, neque lorem laoreet </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box h-100 text-center all-text-white bg-grad px-4 py-5 border-radius-3">
          <div class="feature-box-icon"><img class="w-25" src="/templates/ship/images/tour/editor.svg" alt=""></div>
          <h3 class="feature-box-title">4. Nhận vé Online</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros eu tristique dictum, neque lorem laoreet</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- =======================
	newsletter --> 

@stop