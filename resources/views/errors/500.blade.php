@extends('templates.ship.master')
@section('content')
	<section class="error-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="error-box text-center">
                            <h1>500</h1>
                            <h4>Trang không tồn tại</h4>
                            <p>Trang bạn đang tìm kiếm không tồn tại.</p>
                            <a href="{{ route('ship.index.index') }}"><i class="la la-home"></i>Quay lại trang chủ</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
@stop