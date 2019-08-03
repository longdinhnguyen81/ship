@extends('templates.ship.master')
@section('content')
	
<section> 
  <!-- Slider main container-->
  <div class="swiper-container detail-slider slider-gallery"> 
    <!-- Additional required wrapper-->
    <div class="swiper-wrapper"> 
      <!-- Slides-->
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Our street"><img src="/templates/ship/images/hotels/room-details1.jpg" alt="Our street" class="img-fluid"></a></div>
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Outside"><img src="/templates/ship/images/hotels/room-details2.jpg" alt="Outside" class="img-fluid"></a></div>
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Rear entrance"><img src="/templates/ship/images/hotels/room-details3.jpg" alt="Rear entrance" class="img-fluid"></a></div>
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Kitchen"><img src="/templates/ship/images/hotels/room-details4.jpg" alt="Kitchen" class="img-fluid"></a></div>
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Bedroom"><img src="/templates/ship/images/hotels/room-details.jpg" alt="Bedroom" class="img-fluid"></a></div>
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Bedroom"><img src="/templates/ship/images/hotels/room-details2.jpg" alt="Bedroom" class="img-fluid"></a></div>
    </div>
    <div class="swiper-pagination swiper-pagination-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
  </div>
</section>
<section class="pt80 pb80 listingDetails Campaigns">
  <div class="container">
    <div class="row"> 
      
      <!-- Tab line -->
      <div class="col-lg-8 col-md-12 col-sm-12 ">
        <ul class="nav nav-tabs tab-line">
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-1"> Chi tiết </a> </li>
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab-de-2"> Các loại phòng </a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-3"> Album ảnh </a> </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane" id="tab-de-1">
            <div class="text-block NopaddingDetails">
              <h5 class="mb-4">{{ $hotel->name }}</h5>
              <p class="text-muted font-weight-light">{!! $hotel->detail !!}</p>
            </div>
            <div class="text-block"> 
              <!-- Gallery-->
             
            </div>
            <!-- Amenities-->
            <div class="text-block">
              <h5 class="mb-4">Dịch vụ</h5>
              <div class="row">
                <div class="col-md-6">
                  <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="fa fa-wifi text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Wifi</span></li>
                    <li class="mb-2"><i class="fa fa-tv text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Tivi</span></li>
                    <li class="mb-2"><i class="fa fa-snowflake text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Điều hòa</span></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="fa fa-bath text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Toilet</span></li>
                    <li class="mb-2"><i class="fa fa-utensils text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Ăn sáng</span></li>
                    <li class="mb-2"><i class="fa fa-tshirt text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Giặc ủi</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane booking-search show active" id="tab-de-2">
            
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h5 class="mb-4">Các loại phòng khách sạn</h5>
              </div>
              @foreach($hotel->type as $type)
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="listing-item ">
                  <article class="TravelGo-category-listing fl-wrap">
                    <div class="row">
                      <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="TravelGo-category-img TravelGo-category-list-img"> <a><img src="/upload/{{ $type->picture }}" alt="{{ $type->name }}"></a>
                          <div class="TravelGo-category-opt">
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                            <div class="rate-class-name">
                              <div class="score"><strong>Very Good</strong>27 Reviews </div>
                              <span>5.0</span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="TravelGo-category-content fl-wrap title-sin_item">
                          <div class="TravelGo-category-content-title fl-wrap">
                            <div class="TravelGo-category-content-title-item">
                              <h3 class="title-sin_map"><a>{{ $type->name }}</a></h3>
                              <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> {{ $type->type }}</a> <span>{{ number_format($type->cost, '0', ',', '.') }}</span> </div>
                            </div>
                          </div>
                          <ul class="facilities-list fl-wrap">
                            <li><i class="fas fa-wifi"></i><span>WiFi</span></li>
                            <li><i class="fas fa-parking"></i><span>Bãi đổ xe</span></li>
                            <li><i class="fas fa-smoking-ban"></i><span>Không hút thuốc</span></li>
                            <li><i class="fas fa-utensils"></i><span> Nhà hàng</span></li>
                          </ul>
                          <form method="get" action="{{ route('ship.hotel.cart', $type->id) }}">
                            <div class="TravelGo-category-footer fl-wrap">
                              <div class="TravelGo-category-price btn-grad">
                                <input type="number" name="count" placeholder="Số lượng" value="1">
                              </div>
                              <div class="TravelGo-opt-list">
                                <button type="submit" class="text-primary bg-primary btn color-black">Chọn</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="tab-pane" id="tab-de-3">
            <div class="text-block NopaddingDetails"> 
              <!-- Gallery-->
              <h5 class="mb-4">Album ảnh</h5>
              <div class="row gallery ml-n1 mr-n1">
                @foreach($hotel->pictures as $picture)
                <div class="col-lg-4 col-6 px-1 mb-2"><a><img src="/upload/{{ $picture->url }}" alt="{{ $picture->name }}" class="img-fluid"></a></div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 right_Details">
        <div class="p-4 shadow ml-lg-4 rounded sticky-top" style="top: 100px;">
          @if(Session::get('hotel'))
            @php
              $carts = Session::get('hotel');
              $all = 0;
            @endphp
              @foreach($carts as $cart)
                @php
                  $all += $cart['count'];
                @endphp
              @endforeach
              <div>
                <p class="text-muted">
                <p class="btn bg-primary" style="width: 100%">Giỏ hàng<i class="fa fa-cart-plus"></i></p>
                  <table class="mt-3" style="width: 100%">
                    <tr>
                      <th class="bookex">Khách sạn</th>
                      <th class="bookex">Phòng</th>
                      <th class="bookex">Số lượng</th>
                      <th class="bookex">Chức năng</th>
                    </tr>
                    @foreach($carts as $cart)
                    <tr id="hotel-{{ $cart['id'] }}">
                      <td>
                        {{ $cart['hotel'] }}</span>
                      </td>
                      <td>
                        {{ $cart['name'] }}</span>
                      </td>
                      <td>
                        {{ $cart['count'] }}</span>
                      </td>
                      <td><button onclick="deleteHotel({{ $cart['id'] }})" class="btn btn-danger">Xóa</button></td>
                    </tr>
                    @endforeach
                  </table>
                </p>
                
              </div>
          @else
            <p class="btn bg-primary" style="width: 100%">Giỏ hàng rỗng<i class="fa fa-cart-plus"></i></p>
          @endif
          <hr class="my-4">
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
          <form id="booking-form" method="post" action="{{ route('ship.hotel.checkout') }}" autocomplete="off" class="form">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="bookingDate" class="form-label">Họ và tên</label>
              <div class="datepicker-container datepicker-container-right">
                    <input class="form-control" type="text" name="username" />
              </div>
            </div>
            <div class="form-group">
              <label for="bookingDate" class="form-label">Số điện thoại</label>
              <div class="datepicker-container datepicker-container-right">
                    <input class="form-control" type="number" name="phone" />
              </div>
            </div>
            <div class="form-group">
              <label for="bookingDate" class="form-label">Ngày đặt</label>
              <div class="datepicker-container datepicker-container-right">
                    <input class="form-control" type="text" autocomplete="off" placeholder="Ngày đi" name="dates">
              </div>
            </div>
            @if(Session::get('hotel'))
            <div class="form-group mb-4">
                <input class="form-control" type="hidden" name="number" value="
                @foreach($carts as $cart)
                  {{ $cart['count'] }},
                @endforeach">
            </div>
            <div class="form-group mb-4">
                <input class="form-control" type="hidden" name="type_id" value="
                @foreach($carts as $cart)
                  {{ $cart['id'] }},
                @endforeach">
            </div>
            @endif
            <div class="form-group">
          @if(Session::get('hotel'))
              <button type="submit" class="btn btn-primary btn-block color-black">Đặt phòng</button>
          @else
              <button type="submit" class="btn btn-primary btn-block color-black" disabled>Đặt phòng</button>
          @endif
            </div>
          </form>
          <hr class="my-4">
          <div class="text-center">
            <p> <a href="#" class="text-secondary text-sm"> <i class="fa fa-heart"></i> Bookmark This Hotels</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="Categories pt80 pb60 hotelsamilar">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <p class="subtitle text-secondary nopadding">Similar Hotels</p>
        <h1 class="paddtop1 font-weight lspace-sm">You may also like </h1>
      </div>
      <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="" class="blist text-sm ml-2"> See all Hotels<i class="fas fa-angle-double-right ml-2"></i></a></div>
    </div>
    <div class="row">
      <div class="swiper-container guides-slider-popular"> 
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper"> 
          <!-- Slides-->
          
             <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listroBox">
              <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room2.jpg" class="img-fluid" alt="" >
                <div class="read_more"><span>Read more</span></div>
                </a> </figure>
              <div class="listroBoxmain">
                <h3><a href="hotel-detailed.html">Modern, Well-Appointed Room</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                <a class="address" href="">Get directions</a> </div>
              <ul>
                <li>
                  <p class="card-text text-muted"><span class="h4 text-primary">$80</span> / night</p>
                </li>
                <li>
                  <div class="R_retings">
                    <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>        
		 
		 
          <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listroBox">
              <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room4.jpg" class="img-fluid" alt="" >
                <div class="read_more"><span>Read more</span></div>
                </a> </figure>
              <div class="listroBoxmain">
                <h3><a href="hotel-detailed.html">Modern, Well-Appointed Room</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                <a class="address" href="">Get directions</a> </div>
              <ul>
                <li>
                  <p class="card-text text-muted"><span class="h4 text-primary">$80</span> / night</p>
                </li>
                <li>
                  <div class="R_retings">
                    <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div> 



           <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listroBox">
              <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room5.jpg" class="img-fluid" alt="" >
                <div class="read_more"><span>Read more</span></div>
                </a> </figure>
              <div class="listroBoxmain">
                <h3><a href="hotel-detailed.html">Modern, Well-Appointed Room</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                <a class="address" href="">Get directions</a> </div>
              <ul>
                <li>
                  <p class="card-text text-muted"><span class="h4 text-primary">$80</span> / night</p>
                </li>
                <li>
                  <div class="R_retings">
                    <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div> 



           <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listroBox">
              <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room6.jpg" class="img-fluid" alt="" >
                <div class="read_more"><span>Read more</span></div>
                </a> </figure>
              <div class="listroBoxmain">
                <h3><a href="hotel-detailed.html">Modern, Well-Appointed Room</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                <a class="address" href="">Get directions</a> </div>
              <ul>
                <li>
                  <p class="card-text text-muted"><span class="h4 text-primary">$80</span> / night</p>
                </li>
                <li>
                  <div class="R_retings">
                    <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div> 



           <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listroBox">
              <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room1.jpg" class="img-fluid" alt="" >
                <div class="read_more"><span>Read more</span></div>
                </a> </figure>
              <div class="listroBoxmain">
                <h3><a href="hotel-detailed.html">Modern, Well-Appointed Room</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                <a class="address" href="">Get directions</a> </div>
              <ul>
                <li>
                  <p class="card-text text-muted"><span class="h4 text-primary">$80</span> / night</p>
                </li>
                <li>
                  <div class="R_retings">
                    <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div> 
		  
		 
		 
        </div>
        <div class="swiper-pagination d-md-none"> </div>
      </div>
    </div>
  </div>
</section>
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
<script type="text/javascript">
    function deleteHotel(id){
        $.ajax({
          url: "{{ route('ajax.ship.deleteHotel') }}",
          type: 'GET',
          cache: false,
          data: {
                id: id,
            },
          success: function(data){
            console.log('success')
            $('#hotel-'+id).html(data);
          }, 
          error: function() {
           alert("Có lỗi");
         }
       }); 
        return false;
      } 
</script>
@stop