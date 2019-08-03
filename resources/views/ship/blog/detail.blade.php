@extends('templates.ship.master')
@section('content')
	
<!-- =======================
	Banner innerpage -->
<div class="innerpage-banner left bg-overlay-dark-7 py-7" style="background:url(/templates/ship/images/07.jpg) repeat; background-size:cover;">
  <div class="container">
    <div class="row all-text-white">
      <div class="col-md-12 align-self-center">
        <h1 class="innerpage-title">Tin tức du lịch Lý Sơn</h1>
        <h6 class="subtitle">Kênh tin tức du lịch Lý Sơn.</h6>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/"><i class="ti-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="/"><i class="ti-home"></i> Tin tức</a></li>
            <li class="breadcrumb-item">{{ $blogs->title }}</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- =======================
	Banner innerpage --> 

<section class="Blog-list pt80 pb80 blog-single-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-xs-12">
        <div class="blog-content">
          <div class="post format-standard-image">
            <div class="entry-media"> <img src="/upload/{{ $blogs->picture }}"></div>
            <ul class="entry-meta">
              <li><a href="#"><i class="far fa-clock"></i>{{ $blogs->created_at }}</a></li>
              <li><a href="{{ route('ship.blog.blog', str_slug($blogs->category->name)) }}"><i class="fas fa-funnel-dollar"></i>{{ $blogs->category->name }}</a></li>
            </ul>
            <h2>{{$blogs->title}}</h2>
            <p>{!! $blogs->detail !!}</p>
          </div>
          <div class="tag-share">
            <div class="tag"> Tags phổ biến: &nbsp;
              <ul>
                <li><a href="#">Business ,</a></li>
                <li><a href="#">Agency ,</a></li>
                <li><a href="#">Finance</a></li>
                <li><a href="#">Consutling ,</a></li>
              </ul>
            </div>
          </div>
          <!-- end tag-share -->
          
         
          
          <div class="more-posts">
            <div class="previous-post"> 
            @if($previous)
              <a href="{{ route('ship.blog.detail', ['slug' => str_slug($previous->title), 'id' => $previous->id]) }}"> <span class="post-control-link"><i class="ti-arrow-circle-left"> </i>Tin trước đó</span> </a> 
            @endif
            </div>
            <div class="next-post"> 
            @if($nexts)
              <a href="{{ route('ship.blog.detail', ['slug' => str_slug($nexts->title), 'id' => $nexts->id]) }}"> <span class="post-control-link">Tin tiếp theo <i class="ti-arrow-circle-right"></i></span> </a> 
            @endif
            </div>
          </div>
          <!-- end more-posts -->
        </div>
      </div>
     @include('templates.ship.leftbar')
    </div>
  </div>
</section>



@stop