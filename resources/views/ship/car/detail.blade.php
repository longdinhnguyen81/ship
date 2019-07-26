@extends('templates.ship.master')
@section('content')
	
<section> 
  <!-- Slider main container-->
  <div class="swiper-container detail-slider slider-gallery"> 
    <!-- Additional required wrapper-->
    <div class="swiper-wrapper"> 
      <!-- Slides-->
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Our street"><img src="/templates/ship/images/cars/1.jpg" alt="Our street" class="img-fluid"></a></div>
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Outside"><img src="/templates/ship/images/cars/2.jpg" alt="Outside" class="img-fluid"></a></div>
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Rear entrance"><img src="/templates/ship/images/cars/3.jpg" alt="Rear entrance" class="img-fluid"></a></div>
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Kitchen"><img src="/templates/ship/images/cars/4.jpg" alt="Kitchen" class="img-fluid"></a></div>
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Bedroom"><img src="/templates/ship/images/cars/5.jpg" alt="Bedroom" class="img-fluid"></a></div>
      <div class="swiper-slide"><a data-toggle="gallery-top" title="Bedroom"><img src="/templates/ship/images/cars/6.jpg" alt="Bedroom" class="img-fluid"></a></div>
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
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-1"> Description </a> </li>
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab-de-2"> Availability </a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-3"> Car Details </a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-4"> Calendar </a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-5"> Gallery </a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-6"> Reviews </a> </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane" id="tab-de-1">
            <div class="text-block NopaddingDetails">
              <h5 class="mb-4">Panpacific Blue Hill Resturant &amp; Bar</h5>
              <p class="text-muted font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. </p>
              <p class="text-muted font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p class="text-muted font-weight-light">Also in the apartment:</p>
              <ul class="text-muted font-weight-light roomlist">
                <li>Lorem ipsum dolor sit amet, consectetur</li>
                <li>dolore eu fugiat nulla pariatur</li>
                <li>sed do eiusmod tempor incididunt</li>
                <li>Fresh Sheets and Towels</li>
                <li>dolore eu fugiat nulla pariatur</li>
              </ul>
              <p class="text-muted font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="text-block"> 
              <!-- Listing Location-->
              <h5 class="mb-4">Location</h5>
              <div class="map-wrapper-300 mb-3">
                <div class="map-container fw-map">
                  <div id="map-main"> </div>
                </div>
              </div>
            </div>
            <div class="text-block"> 
              <!-- Gallery-->
              <h5 class="mb-4">Gallery</h5>
              <div class="row gallery ml-n1 mr-n1">
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/1.jpg" alt="..." class="img-fluid"></a></div>
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/2.jpg" alt="..." class="img-fluid"></a></div>
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/3.jpg" alt="..." class="img-fluid"></a></div>
              </div>
            </div>
            <!-- Amenities-->
            <div class="text-block">
              <h5 class="mb-4">Amenities</h5>
              <div class="row">
                <div class="col-md-6">
                  <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="fa fa-wifi text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Wifi</span></li>
                    <li class="mb-2"><i class="fa fa-tv text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Cable TV</span></li>
                    <li class="mb-2"><i class="fa fa-snowflake text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Air conditioning</span></li>
                    <li class="mb-2"><i class="fa fa-thermometer-three-quarters text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Heating</span></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="fa fa-bath text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Toiletteries</span></li>
                    <li class="mb-2"><i class="fa fa-utensils text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Equipped Kitchen</span></li>
                    <li class="mb-2"><i class="fa fa-laptop text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Desk for work</span></li>
                    <li class="mb-2"><i class="fa fa-tshirt text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Washing machine</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="text-block">
              <p class="subtitle text-sm text-primary">Reviews </p>
              <h5 class="mb-4">Listing Reviews </h5>
              <div class="media d-block d-sm-flex review">
                <div class="text-md-center mr-4 mr-xl-5"><img src="/templates/ship/images/img-22.jpg" alt="Padmé Amidala" class="avatar avatar-xl p-2 mb-2"></div>
                <div class="media-body">
                  <h6 class="mt-2 mb-1">Deho Smith</h6>
                  <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i> </div>
                  <p class="text-muted text-sm">ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>
              <div class="media d-block d-sm-flex review">
                <div class="text-md-center mr-4 mr-xl-5"><img src="/templates/ship/images/img-11.jpg" alt="Jabba Hut" class="avatar avatar-xl p-2 mb-2"></div>
                <div class="media-body">
                  <h6 class="mt-2 mb-1">S. M Smithrs</h6>
                  <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i> </div>
                  <p class="text-muted text-sm">ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>
              <div class="rebiew_section">
                <div id="leaveReview" class="mt-4 collapse show" style="">
                  <h5 class="mb-4">Leave a review</h5>
                  <form id="contact-form" method="get" action="#" class="form">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" name="name" id="name" placeholder="Enter your name" required class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <select name="rating" id="rating" class="custom-select focus-shadow-0">
                            <option value="5">★★★★★ (5/5)</option>
                            <option value="4">★★★★☆ (4/5)</option>
                            <option value="3">★★★☆☆ (3/5)</option>
                            <option value="2">★★☆☆☆ (2/5)</option>
                            <option value="1">★☆☆☆☆ (1/5)</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" placeholder="Enter your  email" required class="form-control">
                    </div>
                    <div class="form-group">
                      <textarea rows="4" name="review" id="review" placeholder="Enter your review" required class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post review</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane booking-search show active" id="tab-de-2">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                  <input class="form-control" type="text" placeholder="enter a destination or hotel name">
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group"> <span class="far fa-calendar-alt"></span>
                  <input class="form-control" type="text" id="datepicker-5" autocomplete="off" placeholder="Departure Date">
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <select class="custom-select select-big">
                    <option selected="">Cruise Length</option>
                    <option value="location1">1-2 Night</option>
                    <option value="location2">2-3 Night</option>
                    <option value="location3">3-4 Night</option>
                  </select>
                </div>
              </div>
              <div class="col-lg- col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <select class="custom-select select-big">
                    <option selected="">Cruise Line</option>
                    <option value="location1">Azamara Club Cruises</option>
                    <option value="location2">Celebrity Cruises</option>
                    <option value="location3">Cruise & Maritime</option>
                    <option value="location4">Oceania Cruises</option>
                    <option value="location5">Peter Deilmann Cruises</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <button class="btn btn-primary btn-lg btn-grad" type="submit">Search</button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h5 class="mb-4">Available Cars</h5>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="listing-item ">
                  <article class="TravelGo-category-listing fl-wrap">
                    <div class="row">
                      <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="TravelGo-category-img TravelGo-category-list-img"> <a href="hotel-detailed.html"><img src="/templates/ship/images/cars/1.jpg" alt=""></a>
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
                              <h3 class="title-sin_map"><a href="hotel-detailed.html">Hyundai Elantra GT Sport</a></h3>
                              <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                            </div>
                          </div>
                          <p>Sed interdum metus at nisi tempor laoreet Integer.</p>
                          <ul class="facilities-list fl-wrap">
                            <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                            <li><i class="fas fa-parking"></i><span>Parking</span></li>
                            <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                            <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                          </ul>
                          <div class="TravelGo-category-footer fl-wrap">
                            <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                            <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="listing-item ">
                  <article class="TravelGo-category-listing fl-wrap">
                    <div class="row">
                      <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="TravelGo-category-img TravelGo-category-list-img"> <a href="hotel-detailed.html"><img src="/templates/ship/images/cars/7.jpg" alt=""></a>
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
                              <h3 class="title-sin_map"><a href="hotel-detailed.html">Hyundai Elantra GT Sport</a></h3>
                              <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                            </div>
                          </div>
                          <p>Sed interdum metus at nisi tempor laoreet Integer.</p>
                          <ul class="facilities-list fl-wrap">
                            <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                            <li><i class="fas fa-parking"></i><span>Parking</span></li>
                            <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                            <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                          </ul>
                          <div class="TravelGo-category-footer fl-wrap">
                            <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                            <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="listing-item ">
                  <article class="TravelGo-category-listing fl-wrap">
                    <div class="row">
                      <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="TravelGo-category-img TravelGo-category-list-img"> <a href="hotel-detailed.html"><img src="/templates/ship/images/cars/6.jpg" alt=""></a>
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
                              <h3 class="title-sin_map"><a href="hotel-detailed.html">Hyundai Elantra GT Sport</a></h3>
                              <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                            </div>
                          </div>
                          <p>Sed interdum metus at nisi tempor laoreet Integer.</p>
                          <ul class="facilities-list fl-wrap">
                            <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                            <li><i class="fas fa-parking"></i><span>Parking</span></li>
                            <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                            <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                          </ul>
                          <div class="TravelGo-category-footer fl-wrap">
                            <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                            <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="listing-item ">
                  <article class="TravelGo-category-listing fl-wrap">
                    <div class="row">
                      <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="TravelGo-category-img TravelGo-category-list-img"> <a href="hotel-detailed.html"><img src="/templates/ship/images/cars/4.jpg" alt=""></a>
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
                              <h3 class="title-sin_map"><a href="hotel-detailed.html">Hyundai Elantra GT Sport</a></h3>
                              <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                            </div>
                          </div>
                          <p>Sed interdum metus at nisi tempor laoreet Integer.</p>
                          <ul class="facilities-list fl-wrap">
                            <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                            <li><i class="fas fa-parking"></i><span>Parking</span></li>
                            <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                            <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                          </ul>
                          <div class="TravelGo-category-footer fl-wrap">
                            <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                            <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-de-3">
            <div class="text-block NopaddingDetails">
              <h5 class="mb-4">Car Details</h5>
              <p class="mb-4">Praesent dolor lectus, rutrum sit amet risus vitae, imperdiet cursus neque. Nulla tempor nec lorem eu suscipit. Donec dignissim lectus a nunc molestie consectetur. Nulla eu urna in nisi adipiscing placerat. Nam vel scelerisque magna. Donec justo urna, posuere ut dictum quis.Praesent dolor lectus, rutrum sit amet risus vitae, imperdiet cursus neque. Nulla tempor nec lorem eu suscipit. Donec dignissim lectus a nunc molestie consectetur. Nulla eu urna in nisi adipiscing placerat. Nam vel scelerisque magna. Donec justo urna, posuere ut dictum quis. <br />
                <br/>
                Praesent dolor lectus, rutrum sit amet risus vitae, imperdiet cursus neque. Nulla tempor nec lorem eu suscipit. Donec dignissim lectus a nunc molestie consectetur. Nulla eu urna in nisi adipiscing placerat. Nam vel scelerisque magna. Donec justo urna, posuere ut dictum quis. </p>
              <div class="row">
                <div class="col-md-6">
                  <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="fa fa-wifi text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Wifi</span></li>
                    <li class="mb-2"><i class="fa fa-tv text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Cable TV</span></li>
                    <li class="mb-2"><i class="fa fa-snowflake text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Air conditioning</span></li>
                    <li class="mb-2"><i class="fa fa-thermometer-three-quarters text-secondary w-1rem mr-3 text-center"></i> <span class="text-sm">Heating</span></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="fa fa-bath text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Toiletteries</span></li>
                    <li class="mb-2"><i class="fa fa-utensils text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Equipped Kitchen</span></li>
                    <li class="mb-2"><i class="fa fa-laptop text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Desk for work</span></li>
                    <li class="mb-2"><i class="fa fa-tshirt text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Washing machine</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-de-4">
            <div class="text-block NopaddingDetails"> 
              <!-- Gallery-->
              <h5 class="mb-4">Calender</h5>
              <div id="calendar">
                <table>
                  <tr>
                    <td class="lastmonth">30</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td class="hastask">4</td>
                    <td>5</td>
                    <td>6</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="current">8</td>
                    <td class="hastask">9</td>
                    <td>10</td>
                    <td>11</td>
                    <td class="hastask">12</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td class="hastask">15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td class="hastask">21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td class="hastask">26</td>
                    <td>27</td>
                  </tr>
                  <tr>
                    <td>28</td>
                    <td>29</td>
                    <td class="hastask">30</td>
                    <td>31</td>
                    <td class="nextmonth">1</td>
                    <td>2</td>
                    <td>3</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-de-5">
            <div class="text-block NopaddingDetails"> 
              <!-- Gallery-->
              <h5 class="mb-4">Gallery</h5>
              <div class="row gallery ml-n1 mr-n1">
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/1.jpg" alt="..." class="img-fluid"></a></div>
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/7.jpg" alt="..." class="img-fluid"></a></div>
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/2.jpg" alt="..." class="img-fluid"></a></div>
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/3.jpg" alt="..." class="img-fluid"></a></div>
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/4.jpg" alt="..." class="img-fluid"></a></div>
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/5.jpg" alt="..." class="img-fluid"></a></div>
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/6.jpg" alt="..." class="img-fluid"></a></div>
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/7.jpg" alt="..." class="img-fluid"></a></div>
                <div class="col-lg-4 col-6 px-1 mb-2"><a href="#"><img src="/templates/ship/images/cars/2.jpg" alt="..." class="img-fluid"></a></div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-de-6">
            <div class="text-block NopaddingDetails">
              <h5 class="mb-4">Reviews</h5>
              <div class="media d-block d-sm-flex review">
                <div class="text-md-center mr-4 mr-xl-5"><img src="/templates/ship/images/img-22.jpg" alt="Padmé Amidala" class="avatar avatar-xl p-2 mb-2"></div>
                <div class="media-body">
                  <h6 class="mt-2 mb-1">Deho Smith</h6>
                  <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i> </div>
                  <p class="text-muted text-sm">ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>
              <div class="media d-block d-sm-flex review">
                <div class="text-md-center mr-4 mr-xl-5"><img src="/templates/ship/images/img-11.jpg" alt="Jabba Hut" class="avatar avatar-xl p-2 mb-2"></div>
                <div class="media-body">
                  <h6 class="mt-2 mb-1">S. M Smithrs</h6>
                  <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i> </div>
                  <p class="text-muted text-sm">ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>
              <div class="rebiew_section">
                <div id="leaveReview" class="mt-4 collapse show" style="">
                  <h5 class="mb-4">Leave a review</h5>
                  <form id="contact-form" method="get" action="#" class="form">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" name="name" id="name" placeholder="Enter your name" required class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <select name="rating" id="rating" class="custom-select focus-shadow-0">
                            <option value="5">★★★★★ (5/5)</option>
                            <option value="4">★★★★☆ (4/5)</option>
                            <option value="3">★★★☆☆ (3/5)</option>
                            <option value="2">★★☆☆☆ (2/5)</option>
                            <option value="1">★☆☆☆☆ (1/5)</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" placeholder="Enter your  email" required class="form-control">
                    </div>
                    <div class="form-group">
                      <textarea rows="4" name="review" id="review" placeholder="Enter your review" required class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post review</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 right_Details">
        <div class="p-4 shadow ml-lg-4 rounded sticky-top" style="top: 100px;">
          <p class="text-muted"><span class="text-primary h2">$80</span> per night</p>
          <hr class="my-4">
          <form id="booking-form" method="get" action="#" autocomplete="off" class="form">
            <div class="form-group">
              <label for="bookingDate" class="form-label">Your stay *</label>
              <div class="datepicker-container datepicker-container-right">
                <input type="text" name="bookingDate" id="bookingDate" placeholder="Choose your dates" required class="form-control">
              </div>
            </div>
            <div class="form-group mb-4">
              <label for="guests" class="form-label">Guests *</label>
              <select name="guests" id="guests" class="form-control">
                <option value="1">1 Guest</option>
                <option value="2">2 Guests</option>
                <option value="3">3 Guests</option>
                <option value="4">4 Guests</option>
                <option value="5">5 Guests</option>
              </select>
            </div>
            <div class="form-group mb-4">
              <label for="guests" class="form-label">Child *</label>
              <select name="guests" id="guests" class="form-control">
                <option value="1">1 Child</option>
                <option value="2">2 Child</option>
                <option value="3">3 Child</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Confirm Booking</button>
            </div>
          </form>
          <hr class="my-4">
          <div class="text-center">
            <p> <a href="#" class="text-secondary text-sm"> <i class="fa fa-heart"></i> Bookmark This Cruise</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="Categories pt80 pb60">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <p class="subtitle text-secondary nopadding">Similar Cars</p>
        <h1 class="paddtop1 font-weight lspace-sm">You may also like </h1>
      </div>
      <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="" class="blist text-sm ml-2"> See all Cruise<i class="fas fa-angle-double-right ml-2"></i></a></div>
    </div>
    <div class="row">
      <div class="swiper-container guides-slider-popular"> 
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper"> 
          <!-- Slides-->
          
          <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="/templates/ship/images/cars/1.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Very Good</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Hyundai Elantra GT Sport</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                    </div>
                  </div>
                  <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                    <li><i class="fas fa-parking"></i><span>Parking</span></li>
                    <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                    <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                  </ul>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                    <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="/templates/ship/images/cars/4.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Very Good</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Hyundai Elantra GT Sport</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                    </div>
                  </div>
                  <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                    <li><i class="fas fa-parking"></i><span>Parking</span></li>
                    <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                    <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                  </ul>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                    <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="/templates/ship/images/cars/6.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Very Good</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Hyundai Elantra GT Sport</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                    </div>
                  </div>
                  <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                    <li><i class="fas fa-parking"></i><span>Parking</span></li>
                    <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                    <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                  </ul>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                    <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 swiper-slide">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="/templates/ship/images/cars/7.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Very Good</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Hyundai Elantra GT Sport</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                    </div>
                  </div>
                  <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                    <li><i class="fas fa-parking"></i><span>Parking</span></li>
                    <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                    <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                  </ul>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                    <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                  </div>
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

@stop