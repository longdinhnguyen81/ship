
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link href="/templates/ship/css/style.css" type="text/css" rel="stylesheet" />
<link href="/templates/ship/css/bootstrap-datepicker.css" type="text/css" rel="stylesheet" />
<!-- Favicon -->
<!-- Favicon and Touch Icons -->
<link href="/templates/ship/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="/templates/ship/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="/templates/ship/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="/templates/ship/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="/templates/ship/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<title>QuangNgaiTravel - Kênh du lịch hàng đầu Quảng Ngãi </title>

<style>
a.btn-action {
    background: #222;
    color: #fff;
    padding: 9px 13px;
    margin: 0 0 0 15px;
}
</style>
<!-- =======================
	header Start-->
<header class="header-static navbar-sticky navbar-light shadow"> 
  <!-- Search -->
  <div class="top-search collapse bg-light" id="search-open" data-parent="#search">
    <div class="container">
      <div class="row position-relative">
        <div class="col-md-8 mx-auto py-5">
          <form>
            <div class="input-group">
              <input class="form-control border-radius-right-0 border-right-0" type="text" name="search" autofocus placeholder="Nhập nội dung bạn muốn tìm kiếm">
              <button type="button" class="btn btn-grad border-radius-left-0 mb-0">Tìm kiếm</button>
            </div>
          </form>
          <p class="small mt-2 mb-0"><strong>e.g.</strong>Vé tàu, thuê xe, khách sạn </p>
        </div>
        <a class="position-absolute top-0 right-0 mt-3 mr-3" data-toggle="collapse" href="#search-open"><i class="fas fa-window-close"></i></a> </div>
    </div>
  </div>
  <!-- End Search --> 
  
  <!-- Navbar top start-->
  <div class="navbar-top d-none d-lg-block">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center"> 
        <!-- navbar top Left-->
        <div class="d-flex align-items-center"> 
          <!-- Language -->
          <!-- Top info -->
          <ul class="nav list-unstyled ml-3">
            <li class="nav-item mr-3"> <a class="navbar-link" href="#"><strong>Phone:</strong> 0935.091.684</a> </li>
            <li class="nav-item mr-3"> <a class="navbar-link" href="#"><strong>Email:</strong> taiembkdn@gmail.com</a> </li>
          </ul>
        </div>
        
        <!-- navbar top Right-->
        <div class="d-flex align-items-center"> 
          <!-- Top Account -->
          
          <!-- top social -->
          <ul class="social-icons">
            <li class="social-icons-item social-facebook m-0"> <a class="social-icons-link w-auto px-2" href="#"><i class="fab fa-facebook-f"></i></a> </li>
            <li class="social-icons-item social-instagram m-0"> <a class="social-icons-link w-auto px-2" href="#"><i class="fab fa-twitter"></i></a> </li>
            <li class="social-icons-item social-twitter m-0"> <a class="social-icons-link w-auto pl-2" href="#"><i class="fab fa-instagram"></i></a> </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
  <!-- Navbar top End--> 
  
  <!-- Logo Nav Start -->
  <nav class="navbar navbar-expand-lg">
    <div class="container"> 
      <!-- Logo --> 
      <a class="navbar-brand" href="index.html"> <img src="/templates/ship/images/logo-header.png" alt="travelgo"> </a> 
      <!-- Menu opener button -->
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"> </span> </button>
      <!-- Main Menu Start -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <!-- Menu item 1 Demos-->
          <li class="nav-item dropdown active"> <a class="nav-link" href="{{ route('ship.index.about') }}">Giới thiệu</a>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link" href="{{ route('ship.hotel.index') }}">Đặt khách sạn</a></li>
          <li class="nav-item dropdown"> <a class="nav-link" href="{{ route('ship.car.index') }}">Đặt xe</a></li>
          <li class="nav-item dropdown"> <a class="nav-link" href="/dat-ve-tau-sa-ky-di-ly-son">Đặt vé tàu</a></li>
          
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="docMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin tức du lịch</a>
            <ul class="dropdown-menu" aria-labelledby="docMenu">
              <li><a class="dropdown-item">Home Cars</a></li>
              <li><a class="dropdown-item">List View</a></li>
              <li><a class="dropdown-item">Grid View</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Main Menu End --> 
      <!-- Header Extras Start-->
      <div class="navbar-nav"> 
        <!-- extra item Search-->
        <div class="nav-item search border-0 pl-3 pr-0 px-lg-2" id="search"> <a class="nav-link" data-toggle="collapse" href="#search-open"><i class="fas fa-search"></i></a> </div>
        <!-- extra item Btn-->
        <div class="nav-item border-0 d-none d-lg-inline-block align-self-center"> 
          <a href="#" class=" btn btn-sm btn-grad text-white mb-0"><i class="fas fa-cart-plus"></i></a>
        </div>
      </div>
      <!-- Header Extras End--> 
    </div>
  </nav>
  <!-- Logo Nav End --> 
</header>
<!-- =======================
	header End--> 