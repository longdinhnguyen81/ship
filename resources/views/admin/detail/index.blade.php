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
                                            <li><span class="bread-blod">Chi tiết tin</span>
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
                            <h4>Chi tiết tin</h4>
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
                            <div class="add-product">
                                <a href="{{ route('admin.detail.add') }}">Thêm tin</a>
                            </div>
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Keywords</th>
                                    <th>Hình ảnh</th>
                                    <th>Lượt xem</th>
                                    <th>Trạng thái</th>
                                    <th>Chức năng</th>
                                </tr>
                            @foreach($details as $detail)
                                <tr>
                                    <td>{{ $detail->id }}</td>
                                    <td>{{ $detail->title }}</td>
                                    <td>{{ $detail->keywords }}</td>
                                    <td><img src="/upload/{{ $detail->picture }}" /></td>
                                    <td>{{ $detail->counter }}</td>
                                    <td id="result-{{ $detail->id }}">
                                        @if($detail->active == 1)
                                            <button onClick="activePost({{ $detail->id }})" class="pd-setting">Active</button>
                                        @else
                                            <button onClick="activePost({{ $detail->id }})" class="ds-setting">Disabled</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button onclick="window.location.href='{{ route('admin.detail.edit', $detail->id) }}'" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button onclick="window.location.href='{{ route('admin.detail.delete', $detail->id) }}'" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
    function activePost(id){
        $.ajax({
          url: "{{ route('ajax.admin.post') }}",
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