  @extends('templates.ship.master')
@section('content')
	<!-- =======================
	Main Banner -->
<section class="p-0 height-500 parallax-bg" style="background:url(/templates/ship/images/banner/banner-01.png) no-repeat 100% 0%; background-size:cover;">
@if(Session::has('toasts'))
  @foreach(Session::get('toasts') as $toast)
    <div class="alert alert-{{ $toast['level'] }}">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      {{ $toast['message'] }}
    </div>
  @endforeach
@endif
</section>
<!-- =======================
	Main banner -->

<!-- Phần booking
-->
<section class="mt-lg-n9 mt-sm-0 pb-0 z-index-9 booking-search">
  <div class="container">
    <div class="row shadow border-radius-3">
      <div class="col-md-12 np">
        <div class="feature-box h-100">
          <div class="tab_container">
            <input id="tab1" type="radio" name="tabs" checked>
            <label class="pb0" for="tab1"><span class="txt-30 primary-color">ĐẶT VÉ TÀU DU LỊCH LÝ SƠN</span></label>
            <section id="content1" class="tab-content">
              <form id="search-form" method="get" action="/dat-ve-tau-cang-sa-ky-dao-ly-son">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-6 col-xs-12 padding8">
                    <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                      <select id="select" class="custom-select select-big pl32 txt-14" onchange="mySubmit(this.form)">
                        <option value="cang-sa-ky-dao-ly-son">Cảng Sa Kỳ đến đảo Lý Sơn</option>
                        <option value="dao-ly-son-cang-sa-ky">Đảo Lý Sơn về cảng Sa Kỳ</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                    <div class="form-group"><span class="far fa-calendar-alt"></span>
                      <input class="form-control" type="text" autocomplete="off" placeholder="Ngày đi" name="dates">
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                    <div class="form-group"><span class="fas fa-chair"></span>
                      <input class="form-control" type="number" placeholder="Số chỗ" min="0" max="30" name="ticket">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-6 col-xs-12 padding8">
                    <div class="form-group">
                      <button class="btn btn-primary btn-lg btn-grad" type="submit">Tìm kiếm</button>
                    </div>
                  </div>
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Hướng dẫn đặt vé -->
<section class="pt80 pb80">
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
          <p class="feature-box-desc">Nhập đầy đủ thông tin vào form và tìm kiếm để chọn cho thời gian đi theo mong muốn của bạn. Có thể đặt cả chiều đi và chiều về cùng lúc.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box h-100 text-center all-text-white bg-grad px-4 py-5 border-radius-3" style="background-color:#5bc9c2!important">
          <div class="feature-box-icon"><img class="w-25" src="/templates/ship/images/tour/editor.svg" alt=""></div>
          <h3 class="feature-box-title">2. Điền thông tin</h3>
          <p class="feature-box-desc">Điền đầy đủ thông tin của bạn để chúng tôi có thể liên lạc và thông báo cho bạn những thông tin mới nhất về chuyến đi của bạn nếu có.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box h-100 text-center px-4 py-5">
          <div class="feature-box-icon"><img class="w-25" src="/templates/ship/images/tour/envelope.svg" alt=""></div>
          <h3 class="feature-box-title">3. Thanh toán</h3>
          <p class="feature-box-desc">Tiến hành thanh toán qua các hình thức có sẵn cho chúng tôi. Việc thanh toán trước sẽ giúp bạn giữ được vé tàu đúng ngày giờ của bạn đi.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box h-100 text-center all-text-white bg-grad px-4 py-5 border-radius-3">
          <div class="feature-box-icon"><img class="w-25" src="/templates/ship/images/tour/editor.svg" alt=""></div>
          <h3 class="feature-box-title">4. Nhận vé Online</h3>
          <p class="feature-box-desc">Sau khi thanh toán, hệ thống của chúng tôi tiến hành kiểm tra và gửi thông tin chuyến đi và mã số vé về email của bạn.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Cẩm nang du lịch Lý Sơn -->
<section class="bg-light pt40 pb60 solutions bg-grad" style="background-color:#5bc9e2!important;">
  <div class="container">
  	<p class="title-small">NHỮNG ĐIỀU CẦN BIẾT</p>
  	<h1 class="title-big text-center">Khi tham quan đảo Lý Sơn</h2>
    <div class="row pb20 pt30">
      <div class="col-md-7 mb-5 my-auto">
        <h2 class="txt-30 pb10">1. Tham quan đảo Lý Sơn</h2>
        <p class="pb10">Lý Sơn là 1 huyện đảo thuộc tỉnh quảng Ngãi, đảo lý Sơn nằm cách đất liền 30 Hải Lý, các bạn có thể bắt tàu đi đảo Lý Sơn tại cảng Sa Kỳ, quảng Ngãi</p>
        <p class="pb10"> Lý Sơn có 2 đảo chính: đảo Lớn và đảo Bé. Đảo Lớn (đảo chính, gọi chung là Lý Sơn nhé) nơi tàu từ cảng Sa Kỳ (Quảng Ngãi) sẽ cập cảng, gồm có 2 thôn: thôn Đông, thôn Tây. Các điểm tham quan chính ở Lý Sơn, đảo Bé để tắm và lặn ngắm san hô. Tháng 4,5 là mùa cao điểm ở đây. Thời tiết đẹp, thuận lợi cho lặn ngắm san hô. Đồng nghĩa với việc bạn phải đặt phòng và vé tàu trước khoảng 1 tuần.</p>
      </div>
      <div class="col-md-5 mx-md-auto align-self-center my-auto">
		<img class="rounded" src="/templates/ship/images/cong-to-vo.jpg" alt="">
		<div class="position-absolute left-0 bottom-0 ml-4 ml-md-n2 mb-3">
			<a class="btn btn-grad" data-fancybox href="https://www.youtube.com/embed/n_Cn8eFo7u8"> <i class="fas fa-play text-white"></i>Play Video </a>
		</div>
	  </div>
    </div>

    <div class="row pb20">
      <div class="col-md-5 mx-md-auto align-self-center my-auto">
		<img class="rounded" src="/templates/ship/images/bien-ly-son.jpg" alt="">
	  </div>
      <div class="col-md-7 mb-5 my-auto">
        <h2 class="txt-30 pb10">2. Các địa điểm check-in lý tưởng tại Lý Sơn</h2>
        <p class="pb10">Lý Sơn là 1 huyện đảo thuộc tỉnh quảng Ngãi, đảo lý Sơn nằm cách đất liền 30 Hải Lý, các bạn có thể bắt tàu đi đảo Lý Sơn tại cảng Sa Kỳ, quảng Ngãi</p>
        <p class="pb10"> Lý Sơn có 2 đảo chính: đảo Lớn và đảo Bé. Đảo Lớn (đảo chính, gọi chung là Lý Sơn nhé) nơi tàu từ cảng Sa Kỳ (Quảng Ngãi) sẽ cập cảng, gồm có 2 thôn: thôn Đông, thôn Tây. Các điểm tham quan chính ở Lý Sơn, đảo Bé để tắm và lặn ngắm san hô. Tháng 4,5 là mùa cao điểm ở đây. Thời tiết đẹp, thuận lợi cho lặn ngắm san hô. Đồng nghĩa với việc bạn phải đặt phòng và vé tàu trước khoảng 1 tuần.</p>
      </div>
    </div>


    <div class="row pt30">
      <div class="col-md-7 mx-auto mb-5">
        <h2 class="txt-30 pb10">3. Hướng dẫn cách đi ra đảo Lý Sơn</h2>
        <p class="pb10">Đảo Lý Sơn NẰm ccsh đát liền 30km, vì vậy để di chuyển ra đảo Lý Sơn chúng ta có thể lựa chọn các phương án sau đây để tiết kiệm chi phí và rẻ nhất có thể</p>
        <p>1. Các bạn di chuyển bằng máy bay, xe buýt đường dài hoặc tàu hỏa đến các nhà ga và sân bay gần với tỉnh Quảng Ngãi. Các sân bay có thể di chuyển đến chính là sân bay Chu Lai, Sân Bay Đà Nẵng, Tp Đà Nẵng, Tp Hội An, Tp Quảng Ngãi.</p>
        <p>2. Sau khi đến các nhà ga và sân bay gần với tỉnh Quảng Ngãi, các bạn thuê xe taxi, xe khách, xe buýt, hoặc đi ghép xe đến cảng Sa Kỳ tỉnh Quảng Ngãi</p>
      	<p>3. Các bạn checkin vé tàu và lên tàu đi từ cảng Sa Kỳ đến đảo Lý Sơn. Vì du lịch Lý Sơn đang rất được ưa chuộng, nên các bạn lưu ý nhớ đặt vé tàu trước khi đến cảng Sa Kỳ</p>
      </div>
      <div class="col-md-5 mx-md-auto align-self-center my-auto">
		<img class="rounded" src="/templates/ship/images/hinh-anh-ly-son.jpg" alt="">
	  </div>
    </div>
</section>

<!-- Thông tin tàu du lịch Lý Sơn -->
<section class="Categories pt80 pb60 Categories-home">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <p class="subtitle text-secondary nopadding">TÀU ĐƯA ĐÓN LÝ SƠN SA KỲ</p>
        <h1 class="paddtop1 font-weight lspace-sm">Các hãng tàu dịch vụ đưa đón Sa Kỳ Lý Sơn</h1>
      </div>
      <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="#" class="blist text-sm ml-2">Đặt vé tàu ngay<i class="fas fa-angle-double-right ml-2"></i></a></div>
    </div>
    <div class="row">
      <div class="swiper-container guides-slider-home-cruises"> 
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper"> 
          <!-- Slides-->
          
          <div class="swiper-slide h-auto px-2">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="/templates/ship/images/cruises/6.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Rất tốt</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Tàu Super Biển đông</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> Cảng Sa Kỳ, Tỉnh Quảng Ngãi</a> <span>35 hải lý/giờ</span> </div>
                    </div>
                  </div>
                  <p>Hệ thống tàu cao tốc đầu tiên chạy tuyến Sa Kỳ - Lý Sơn.</p>
				  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-tv"></i><span>Tivi</span></li>
                    <li><i class="fas fa-bath"></i><span>Nhà vệ sinh</span></li>
                    <li><i class="fas fa-tshirt"></i><span>Áo Phao</span></li>
                    <li><i class="fas fa-cloud"></i><span>Ngắm cảnh</span></li>
                    <span style="float:right;"><button class="btn btn-primary btn-md btn-grad" type="submit">Chi tiết</button></span>
                  </ul>
                </div>
              </article>
            </div>
          </div>
           <div class="swiper-slide h-auto px-2">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="/templates/ship/images/cruises/5.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Rất tốt</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Tàu An Vĩnh Express</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> Cảng Sa Kỳ, Tỉnh Quảng Ngãi</a> <span>30km/h</span> </div>
                    </div>
                  </div>
                  <p>Là 1 trong 3 hãng tàu có tàu cao tốc, An Vĩnh Express có 6 chuyến tàu ra vào mỗi ngày.</p>
				  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-tv"></i><span>Tivi</span></li>
                    <li><i class="fas fa-bath"></i><span>Nhà vệ sinh</span></li>
                    <li><i class="fas fa-tshirt"></i><span>Áo Phao</span></li>
                    <li><i class="fas fa-cloud"></i><span>Ngắm cảnh</span></li>
                    <span style="float:right;"><button class="btn btn-primary btn-md btn-grad" type="submit">Chi tiết</button></span>
                  </ul>
                </div>
              </article>
            </div>
          </div>
           <div class="swiper-slide h-auto px-2">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="/templates/ship/images/cruises/1.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Rất tốt</strong>27 Reviews </div>
                      <span>4.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Tàu Chín Nghĩa</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> Cảng Sa Kỳ, Tỉnh Quảng Ngãi</a> <span>30km/h</span> </div>
                    </div>
                  </div>
                  <p>Chín Nghĩa là 1 trong những hãng tàu quen thuộc nhất trên tuyến Sa Kỳ - Lý Sơn.</p>
				  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-tv"></i><span>Tivi</span></li>
                    <li><i class="fas fa-bath"></i><span>Nhà vệ sinh</span></li>
                    <li><i class="fas fa-tshirt"></i><span>Áo Phao</span></li>
                    <li><i class="fas fa-cloud"></i><span>Ngắm cảnh</span></li>
                    <span style="float:right;"><button class="btn btn-primary btn-md btn-grad" type="submit">Chi tiết</button></span>
                  </ul>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="swiper-pagination d-md-none"> </div>
      </div>
    </div>
  </div>
</section>

<!-- Giới thiệu công ty -->
<section class="service pt30 pb10 service-home">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 mx-auto">
        <div class="title text-center">
          <h2>Giới thiệu hệ thống booking Đảo Lý Sơn</h2>
          <p class="mb-0">Lyson24h là hệ thống booking vé online và các tiện ích trên đảo Lý Sơn. Tại đây các bạn có thể tìm thấy các thông tin bổ ích nhất về du lịch tại đảo Lý Sơn, đặt vé tàu Online, xem thông tin khách sạn, và thuê xe du lịch trên và ngoài đảo</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mt-30">
        <div class="featureBox icon-grad h-100">
          <div class="feature-box-icon"><i class="fas fa-route"></i></div>
          <h3 class="feature-box-title">Xe đưa đón tận nơi</h3>
          <p class="feature-box-desc">Hệ thống xe ô tô đời mới sang trọng đưa đón quý khách tận nơi từ nhà ga sân bay đến cảng Sa Kỳ, giá cả công khai, và rẻ nhất thị trường. Xe du lịch, xe ghép 4, 5, 7 chỗ đi từ Các sân bay Chu Lai Đà Nẵng, Hội An, Quảng Ngãi đến cảng Sa Kỳ tỉnh Quảng Ngãi</p>
          <a class="mt-3" href="{{ route('ship.car.index') }}">Xem Chi tiết!</a> </div>
      </div>
      <div class="col-md-4 mt-30">
        <div class="featureBox icon-grad h-100">
          <div class="feature-box-icon"><i class="fab fa-avianex"></i></div>
          <h3 class="feature-box-title">Đưa đón thăm quan đảo</h3>
          <p class="feature-box-desc">Hệ thống xe du lịch 16 - 25 chỗ, chuyên đưa đón các đoàn du lịch thăm quan các địa điểm chính trên đảo Lý Sơn, tại đây có hướng dẫn viên du lịch, sẽ cho quý khách thêm nhiều kiến thức về huyện đảo và lịch sử khám phá bảo vệ biển đảo của dân tộc Việt Nam</p>
          <a class="mt-3" href="{{ route('ship.car.index') }}">Xem chi tiết!</a> </div>
      </div>
      <div class="col-md-4 mt-30">
        <div class="featureBox icon-grad h-100">
          <div class="feature-box-icon"><i class="fas fa-bullhorn"></i></div>
          <h3 class="feature-box-title">Đặt vé tàu, cano Online</h3>
          <p class="feature-box-desc">Hệ thống đặt vé tàu đi từ cảng Sa Kỳ đến đảo Lý Sơn Online, In vé điện tử, gửi về điện thoại. Ngoài ra còn cung cấp vé đi từ Đảo Lớn Sang đảo bé, Giá cả niêm yết, đi theo đoàn từ 10 người trở lên liên hệ với chúng tôi để được bố trí vé và giảm giá</p>
          <a class="mt-3" href="#">Xem chi tiết!</a> </div>
      </div>
    </div>
  </div>
</section>
<!-- Tin Quảng Cáo -->
<section class="bg-light pt30 pb20 solutions bg-grad">
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-center mx-auto mb-5">
        <h2 class="title">Đảo Lý Sơn, Madive của Việt Nam</h2>
        <p>Thiên đường biển, đảo hoang dã và tự nhiên tại Việt Nam, được bình chọn là 1 trong những bãi biển đẹp nhất Việt Nam, hãy đến với Lý Sơn, các bạn sẽ có những kỷ niệm đáng nhớ</p>
      </div>
  	</div>
  </div>
</section>

<!-- Khách sạn -->
<section class="Categories pt80 pb60 ">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <p class="subtitle text-secondary nopadding">Khách sạn trên đảo Lý Sơn</p>
        <h1 class="paddtop1 font-weight lspace-sm">Thông tin khách sạn</h1>
      </div>
      <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="{{ route('ship.hotel.index') }}" class="blist text-sm ml-2">Tất cả khách sạn<i class="fas fa-angle-double-right ml-2"></i></a></div>
    </div>
    <div class="row">
      @foreach($hotels as $hotel)
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="listroBox">
          <figure> <a href="{{ route('ship.hotel.detail', str_slug($hotel->name)) }}" class="wishlist_bt"></a> <a href="{{ route('ship.hotel.detail', str_slug($hotel->name)) }}"><img src="/upload/{{ $hotel->picture }}" class="img-fluid" alt="{{ $hotel->name }}" >
            <div class="read_more"><span>Chi tiết</span></div>
            </a> </figure>
          <div class="listroBoxmain">
            <h3><a href="hotel-detailed.html">{{ $hotel->name }}</a></h3>
            <p>{{ $hotel->description }}</p>
            <a class="address" href="{{ route('ship.hotel.detail', str_slug($hotel->name)) }}">Huyện đảo Lý Sơn</a> </div>
          <ul>
            <li>
              <p class="card-text text-muted"><span class="h4 text-primary">{{ number_format($hotel->cost, 0, ',', '.') }}</span> / đêm</p>
            </li>
            <li>
              <div class="R_retings">
                <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
              </div>
            </li>
          </ul>
        </div>
      </div> 
      @endforeach
    </div>
  </div>
</section>
<!-- Tin Quảng Cáo -->
<section class="bg-light pt30 pb20 solutions bg-grad">
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-center mx-auto mb-5">
        <h2 class="title">Thuê xe giá rẻ du lịch Đảo Lý Sơn</h2>
        <p>Thuê xe du lịch giá rẻ đi Lý Sơn, chuyên các dòng xe 4 - 7 - 10 -16 chỗ đời mới tuyến Đà Nẵng - Chu Lai - Sa Kỳ</p>
      </div>
    </div>
  </div>
</section>

<!-- Khách sạn -->
<section class="Categories pt80 pb60 ">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <p class="subtitle text-secondary nopadding">Thuê xe du lịch Lý Sơn</p>
        <h1 class="paddtop1 font-weight lspace-sm">Thông tin chuyến xe</h1>
      </div>
      <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="{{ route('ship.car.index') }}" class="blist text-sm ml-2">Tất cả chuyến xe<i class="fas fa-angle-double-right ml-2"></i></a></div>
    </div>
    <div class="row">
      @foreach($cars as $car)
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="listroBox">
          <figure><<a href="{{ route('ship.car.detail', str_slug($car->name)) }}"><img src="/upload/{{ $car->picture }}" class="img-fluid" alt="{{ $car->title }}" >
            <div class="read_more"><span>Chi tiết</span></div>
            </a> </figure>
          <div class="listroBoxmain">
            <h3><a href="{{ route('ship.car.detail', str_slug($car->name)) }}">{{ $car->name }}</a></h3>
            <p>{{ $car->description }}</p></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<script type="text/javascript">
    function mySubmit(theForm) {
            var action = $("#select").val();
            console.log(action)
            $("#search-form").attr("action", "/dat-ve-tau-"+action);
    }
</script>
<script src="/templates/ship/js/jquery-2.2.4.min.js"></script>
<script>
    var today = new Date();
    var dd = today.getDate() + 1;
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    if (dd < 10) {
      dd = '0' + dd;
    } 
    if (mm < 10) {
      mm = '0' + mm;
    } 
    var day = mm + '-' + dd + '-' + yyyy;
    console.log(day)

    $(function() {
        $('input[name="dates"]').daterangepicker({
            minDate: day,
            singleDatePicker: true,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });
    });

</script>
@stop