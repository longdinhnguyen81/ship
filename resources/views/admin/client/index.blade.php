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
                                            <li><span class="bread-blod">Quản lý vé tàu</span>
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
                            <h4>Quản lý vé tàu</h4>
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Họ và tên</th>
                                    <th>SDT</th>
                                    <th>Email</th>
                                    <th>Số vé</th>
                                    <th>Thanh toán</th>
                                    <th>Ngày đặt</th>
                                    <th>Ngày đi</th>
                                    <th>Giá</th>
                                    <th>Tên tàu</th>
                                    <th>Trạng thái</th>
                                    <th>Chức năng</th>
                                </tr>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{$client->fullname}}</td>
                                    <td>{{$client->phone}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->ticket}}</td>
                                    <td>{{$client->type}}</td>
                                    <td>{{ $client->created_at }}</td>
                                    <td>{{ $client->day }}</td>
                                    <td>{{ $client->train ? $client->train->name:'a' }}</td>
                                    <td><ul>
                                    @foreach($client->cost as $cost)
                                      <li>{{ $cost->cost }}</li>
                                    @endforeach
                                    </ul></td>
                                    <td id="result-{{ $client->id }}">
                                        @if($client->active == 1)
                                            <button class="pd-setting">Đã gửi vé</button>
                                        @else
                                            <button onClick="activeClient({{ $client->id }})" class="ds-setting">Đang chờ</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button onclick="window.location.href='{{ route('admin.client.delete', $client->id) }}'" data-toggle="tooltip" title="Xóa" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
    function activeClient(id){
        $.ajax({
          url: "{{ route('ajax.admin.client') }}",
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