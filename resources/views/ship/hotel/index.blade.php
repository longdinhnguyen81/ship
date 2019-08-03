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
        <div class="blog-sidebar">
          <div class="widget search-widget">
            <h3>Tìn kiếm</h3>
            <form action="{{ route('ship.blog.search') }}" method="get">
              <div>
                <input type="text" class="form-control" placeholder="Tìm kiếm tin tức.." name="name">
                <button type="submit"><i class="ti-search"></i></button>
              </div>
            </form>
          </div>
          <div class="widget category-widget">
            <h3>Danh mục tin</h3>
            <ul>
              @foreach($categorys as $cat)
              <li><a href="{{ route('ship.blog.blog', str_slug($cat->name)) }}">{{ $cat->name }} <span>({{ $cat->detail->count() }})</span></a></li>
              @endforeach
            </ul>
          </div>
          <div class="widget recent-post-widget">
            <h3>Tin tức mới nhất</h3>
            <div class="posts">
              @foreach($details as $detail)
              <div class="post">
                <div class="img-holder"> <img style="width: 100px;height: 50px" src="/upload/{{ $detail->picture }}" alt="{{ $detail->title }}"> </div>
                <div class="details">
                  <h4><a href="{{ route('ship.blog.detail', ['slug' => str_slug($detail->title), 'id' => $detail->id]) }}">{{ $detail->title }}</a></h4>
                  <span class="date">{{ $detail->created_at }}</span> </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="widget tag-widget">
            <h3>Tags phổ biến</h3>
            <ul>
              <li><a href="#">Du lịch Đà Nẵng</a></li>
              <li><a href="#">Thuê xe Đà Nẵng đi Bà Nà</a></li>
              <li><a href="#">Thuê xe đi vinpearland</a></li>
              <li><a href="#">Research</a></li>
              <li><a href="#">Corporate</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="row">
          @foreach($hotels as $hotel)
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row listroBox">
                  <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                    <figure> <a href="{{ route('ship.hotel.detail', str_slug($hotel->name)) }}" class="wishlist_bt"></a> <a href="{{ route('ship.hotel.detail', str_slug($hotel->name)) }}"><img src="/upload/{{ $hotel->picture }}" class="img-fluid" alt="{{ $hotel->name }}" >
                      <div class="read_more"><span>Chi tiết</span></div>
                      </a> </figure>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                    <div class="listroBoxmain">
                      <h3><a href="{{ route('ship.hotel.detail', str_slug($hotel->name)) }}">{{ $hotel->name }}</a></h3>
                      <p>{{ $hotel->description }}</p>
                      <a class="address" href="">Trung tâm đảo Lý Sơn</a> </div>
                    <ul>
                      <li><span class="Ropen">Đang mở cửa</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        {{-- 
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
        </div>  --}} 
      </div>
    </div>
  </div>
</section>

<!-- =======================
	newsletter -->
{{-- <section class="bg-light pattern-overlay-1-dark">
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
</section> --}}
<!-- =======================
	newsletter --> 
@stop