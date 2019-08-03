@extends('templates.ship.master')
@section('content')

<!-- =======================
	Banner innerpage -->
<div class="innerpage-banner left bg-overlay-dark-7 py-7" style="background:url(/templates/ship/images/07.jpg) repeat; background-size:cover;">
  <div class="container">
    <div class="row all-text-white">
      <div class="col-md-12 align-self-center">
        <h1 class="innerpage-title">Tin tức</h1>
        <h6 class="subtitle">Kênh tin tức du lịch Lý Sơn.</h6>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/"><i class="ti-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('ship.blog.index') }}"><i class="ti-home"></i> Tin tức</a></li>
            <li class="breadcrumb-item">{{ $blogs->name }}</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- =======================
	Banner innerpage --> 

<section class="Blog-list pt80 pb80">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-xs-12">
        <div class="row"> 
          <!-- blog item-->
          @foreach($blogs->detail as $blog)
          <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card shadow border-0 h-100"><a href="{{ route('ship.blog.detail', ['slug' => str_slug($blog->title), 'id' => $blog->id]) }}"><img src="/upload/{{ $blog->picture }}" alt="{{ $blog->title }}" class="img-fluid card-img-top img-cover"></a>
              <div class="card-body">
                <h5 class="my-2"><a href="{{ route('ship.blog.detail', ['slug' => str_slug($blog->title), 'id' => $blog->id]) }}" class="text-dark">{{ $blog->title }}</a></h5>
                <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>{{ $blog->created_at }}</p>
                <p class="my-2 text-muted text-sm">{{ $blog->description }}</p>
                <a href="{{ route('ship.blog.detail', ['slug' => str_slug($blog->title), 'id' => $blog->id]) }}" class="btn btn-link pl-0">Chi tiết<i class="fa fa-long-arrow-alt-right ml-2"></i></a> </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      @include('templates.ship.leftbar')
    </div>
  </div>
</section>

@stop