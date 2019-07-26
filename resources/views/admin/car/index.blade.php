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
                                            <li><span class="bread-blod">Quản lý xe</span>
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
                                <a href="{{ route('admin.car.add') }}">Thêm xe</a>
                            </div>
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên xe</th>
                                    <th>Mô tả</th>
                                    <th>Hình ảnh</th>
                                    <th>Tình trạng</th>
                                    <th>Chức năng</th>
                                </tr>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{ $car->id }}</td>
                                    <td>{{ $car->name }}</td>
                                    <td>{{ $car->description }}</td>
                                    <td><img src="/upload/{{ $car->picture }}" alt="{{ $car->name }}" /></td>
                                    <td id="result-{{ $car->id }}">
                                    	@if($car->active == 1)
                                            <button onClick="activeCar({{ $car->id }})" class="pd-setting">Active</button>
                                        @else
                                            <button onClick="activeCar({{ $car->id }})" class="ds-setting">Disabled</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button onclick="window.location.href='{{ route('admin.car.edit', $car->id) }}'" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button onclick="window.location.href='{{ route('admin.car.delete', $car->id) }}'" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script type="text/javascript">
    function activeCar(id){
        $.ajax({
          url: "{{ route('ajax.admin.car') }}",
          type: 'GET',
          cache: false,
          data: {
                id: id,
            },
          success: function(data){
            console.log('success')
            $('#result-'+id).html(data);
          }, 
          error: function() {
           alert("Có lỗi");
         }
       }); 
        return false;
      }
</script>
@stop