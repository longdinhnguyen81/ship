@extends('templates.ship.master')
@section('content')
	
<!-- =======================
	Banner innerpage -->
<div class="innerpage-banner left bg-overlay-dark-7 py-7" style="background:url(/templates/ship/images/07.jpg) repeat; background-size:cover;">
  <div class="container">
    <div class="row all-text-white">
      <div class="col-md-12 align-self-center">
        <h1 class="innerpage-title">Khách sạn tại Lý Sơn</h1>
        <h6 class="subtitle">Tổng hợp các khách sạn, nhà nghỉ tại Lý Sơn.</h6>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="index.html"><i class="ti-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item">Khách sạn</li>
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
          <form action="#" autocomplete="off" >
            <div class="mb-left">
              <label for="form_dates" class="form-label">Ngày</label>
              <div class="form-group">
                <input class="form-control" type="text" id="datepicker" autocomplete="off" placeholder="Ngày đặt phòng">
              </div>
            </div>
            <div class="mb-left">
              <label for="form_guests" class="form-label">Số lượng</label>
              <div class="form-group">
                <input class="form-control" type="number" placeholder="Số lượng">
              </div>
            </div>
            <div class="mb-left">
              <label for="form_type" class="form-label">Loại khách sạn</label>
              <select class="custom-select select-big ">
                <option value="type_0">4* </option>
                <option value="type_1">3* </option>
                <option value="type_2">Nhà nghỉ, homestay </option>
              </select>
            </div>
            <div class="mb-left">
              <label class="form-label">Kiểu phòng</label>
              <ul class="list-inline mb-0 mt-1">
                <li class="list-inline-item">
                  <div class="custom-control custom-switch">
                    <input id="instantBook" type="checkbox" class="custom-control-input">
                    <label for="instantBook" class="custom-control-label"> <span class="text-sm">Phòng đôi</span></label>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="custom-control custom-switch">
                    <input id="superhost" type="checkbox" class="custom-control-input">
                    <label for="superhost" class="custom-control-label"> <span class="text-sm">Deluxe</span></label>
                  </div>
                </li>
              </ul>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="row">
          
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row listroBox">
                  <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                    <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room6.jpg" class="img-fluid" alt="" >
                      <div class="read_more"><span>Chi tiết</span></div>
                      </a> </figure>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                    <div class="listroBoxmain">
                      <h3><a href="hotel-detailed.html">Khách sạn Mường Thanh</a></h3>
                      <p>Khách sạn 4 sao đầu tiên tại Mường Thanh</p>
                      <a class="address" href="">Trung tâm đảo Lý Sơn</a> </div>
                    <ul>
                      <li><span class="Ropen">Đang mở cửa</span></li>
                      <li>
                        <div class="R_retings"><span>Review:<em>122 Reviews</em></span><strong>8.2</strong></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row listroBox">
                  <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                    <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room1.jpg" class="img-fluid" alt="" >
                      <div class="read_more"><span>Chi tiết</span></div>
                      </a> </figure>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                    <div class="listroBoxmain">
                      <h3><a href="hotel-detailed.html">Khách sạn Đảo Ngọc</a></h3>
                      <p>Khách sạn 4 sao mới nổi tại Lý Sơn</p>
                      <a class="address" href="">View biển Lý Sơn</a> </div>
                    <ul>
                      <li><span class="Ropen">Đang mở cửa</span></li>
                      <li>
                        <div class="R_retings"><span>Review:<em>122 Reviews</em></span><strong>8.2</strong></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>    
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row listroBox">
                  <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                    <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room2.jpg" class="img-fluid" alt="" >
                      <div class="read_more"><span>Read more</span></div>
                      </a> </figure>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                    <div class="listroBoxmain">
                      <h3><a href="hotel-detailed.html">Blue Hill Restaurant</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                      <a class="address" href="">Get directions</a> </div>
                    <ul>
                      <li><span class="Ropen">Now Open</span></li>
                      <li>
                        <div class="R_retings"><span>Blue Hill<em>122 Reviews</em></span><strong>8.2</strong></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>      
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row listroBox">
                  <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                    <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room3.jpg" class="img-fluid" alt="" >
                      <div class="read_more"><span>Read more</span></div>
                      </a> </figure>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                    <div class="listroBoxmain">
                      <h3><a href="hotel-detailed.html">Blue Hill Restaurant</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                      <a class="address" href="">Get directions</a> </div>
                    <ul>
                      <li><span class="Ropen">Now Open</span></li>
                      <li>
                        <div class="R_retings"><span>Blue Hill<em>122 Reviews</em></span><strong>8.2</strong></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>         
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row listroBox">
                  <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                    <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room4.jpg" class="img-fluid" alt="" >
                      <div class="read_more"><span>Read more</span></div>
                      </a> </figure>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                    <div class="listroBoxmain">
                      <h3><a href="hotel-detailed.html">Blue Hill Restaurant</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                      <a class="address" href="">Get directions</a> </div>
                    <ul>
                      <li><span class="Ropen">Now Open</span></li>
                      <li>
                        <div class="R_retings"><span>Blue Hill<em>122 Reviews</em></span><strong>8.2</strong></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>          
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row listroBox">
                  <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                    <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room5.jpg" class="img-fluid" alt="" >
                      <div class="read_more"><span>Read more</span></div>
                      </a> </figure>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                    <div class="listroBoxmain">
                      <h3><a href="hotel-detailed.html">Blue Hill Restaurant</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                      <a class="address" href="">Get directions</a> </div>
                    <ul>
                      <li><span class="Ropen">Now Open</span></li>
                      <li>
                        <div class="R_retings"><span>Blue Hill<em>122 Reviews</em></span><strong>8.2</strong></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>  
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row listroBox">
                  <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                    <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="/templates/ship/images/hotels/room7.jpg" class="img-fluid" alt="" >
                      <div class="read_more"><span>Read more</span></div>
                      </a> </figure>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                    <div class="listroBoxmain">
                      <h3><a href="hotel-detailed.html">Blue Hill Restaurant</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                      <a class="address" href="">Get directions</a> </div>
                    <ul>
                      <li><span class="Ropen">Now Open</span></li>
                      <li>
                        <div class="R_retings"><span>Blue Hill<em>122 Reviews</em></span><strong>8.2</strong></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
        
    <div class="paginationCommon blogPagination categoryPagination">
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span> </a> </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li> <a href="#" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </li>
            </ul>
          </nav>
        </div>  
      </div>
    </div>
  </div>
</section>

<!-- =======================
	newsletter -->
<section class="bg-light pattern-overlay-1-dark">
  <div class="container">
    <div class="col-md-12 col-lg-9 mx-auto p-4 p-sm-5">
      <div class="text-center px-0 px-sm-5">
        <p class="mb-3 lead">21,215+ Hotel and Resorts Available!</p>
        <form>
          <div class="input-group px-0 px-md-5">
            <input class="form-control border-radius-right-0 border-right-0 bg-transparent" type="text" name="search" placeholder="Enter destination">
            <button type="button" class="btn btn-grad mb-0 border-radius-left-0"> <span class=" d-md-block">Search now</span> <span class="d-md-none"><i class="fab fa-paper-plane-o m-0"></i></span> </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- =======================
	newsletter --> 
@stop