@extends('templates.admin.master')
@section('content')
	<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{ route('admin.index.index') }}">Trang chủ</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Quản lý tàu</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Thêm tàu</h4>
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
                            <div class="add-product">
                                <a href="{{ route('admin.train.add') }}">Thêm tàu</a>
                            </div>
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên tàu</th>
                                    <th>Mô tả</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá</th>
                                    <th>Tình trạng</th>
                                    <th>Chức năng</th>
                                </tr>
                            @foreach($trains as $train)
                                <tr>
                                    <td>{{ $train->id }}</td>
                                    <td>{{ $train->name }}</td>
                                    <td>{{ $train->description }}</td>
                                    <td><img src="/upload/{{ $train->picture }}" alt="{{ $train->name }}" /></td>
                                    <td>
                                    	<table style="border: 1px">
                                    		<tr>
                                    			<th>Thời gian</th>
                                                <th>Chiều đi</th>
                                    			<th>Giá vé</th>
                                    			<th><a href="{{ route('admin.cost.add', $train->id) }}">Thêm giá</a></th>
                                    		</tr>
                                    		@foreach($train->cost as $cost)
                                    		<tr>
                                                <td>{{ $cost->time }}</td>
                                    			<td>{{ $cost->train_from }} - {{ $cost->train_to }}</td>
                                    			<td>{{ number_format($cost->cost, 0, ',', '.') }} VND</td>
                                    			<td>
                                    				<button onclick="window.location.href='{{ route('admin.cost.edit', ['id' => $train->id, 'cid' => $cost->id]) }}'" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        			<button onclick="window.location.href='{{ route('admin.cost.delete', ['id' => $train->id, 'cid' => $cost->id]) }}'" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    			</td>
                                    		</tr>
                                    		@endforeach
                                    	</table>
                                    </td>
                                    <td>
                                    	@if($train->active == 1)
                                        	<button class="pd-setting">Active</button>
                                        @else
                                        	<button class="ds-setting">Disabled</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button onclick="window.location.href='{{ route('admin.train.edit', $train->id) }}'" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button onclick="window.location.href='{{ route('admin.train.delete', $train->id) }}'" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop