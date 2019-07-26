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
                                            <li><span class="bread-blod">Quản lý admin</span>
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
                            <h4>Thêm admin</h4>
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
                            <div class="add-product">
                                <a href="{{ route('admin.users.add') }}">Thêm admin</a>
                            </div>
                            <table>
                              <tr>
                                  <th>ID</th>
                                  <th>Tên đăng nhập</th>
                                  <th>Tên người dùng</th>
                                  <th>Chức năng</th>
                              </tr>
                              @foreach($users as $user)
                              <tr>
                                  
                                  <td>{{$user->id}}</td>
                                  <td>{{$user->username}}</td>
                                  <td>{{$user->fullname}}</td>
                                  <td>
                                      <button onclick="window.location.href='{{ route('admin.users.edit', $user->id) }}'" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                      <button onclick="window.location.href='{{ route('admin.users.delete', $user->id) }}'" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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