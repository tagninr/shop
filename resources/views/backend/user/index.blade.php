@extends('backend.layout.master')
@section('title')
    Tài khoản | AdminLD
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tài khoản
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">Tài khoản</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#list" data-toggle="tab">Danh sách</a></li>
                            <li><a href="#add" data-toggle="tab">Thêm</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="list">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Chi tiết thông tin tài khoản</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="3%">ID</th>
                                                <th width="15%">Tên tài khoản</th>
                                                <th width="10%">Email</th>
                                                <th width="10%">Địa chỉ</th>
                                                <th width="10%">SĐT</th>
                                                <th width="10%">Ngày tạo</th>
                                                <th width="12%">Ngày cập nhật</th>
                                                <th width="12%">Thao tác</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->full_name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->address}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    <td>
                                                        @php
                                                            \Carbon\Carbon::setLocale('vi');
                                                        @endphp
                                                        {{\Carbon\Carbon::createFromTimestamp(strtotime($user->created_at))->diffForHumans()}}
                                                    </td>
                                                    <td>
                                                        @php
                                                            \Carbon\Carbon::setLocale('vi');
                                                        @endphp
                                                        {{\Carbon\Carbon::createFromTimestamp(strtotime($user->updated_at))->diffForHumans()}}
                                                    </td>
                                                    <td>
                                                        <a {{--href="{{URL::route('#', $cat->id)}}"--}}>
                                                            <button class="btn btn-sm btn-warning" style="margin-right: 1em;"><i class="fa fa-pencil"></i></button>
                                                        </a>
                                                        <a onclick="return xacNhanXoa('Bạn có muốn xóa không ?')" {{--href="{{URL::route('#', $cat->id)}}"--}}>
                                                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="add">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-1 control-label">Email</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputEmail" type="email" placeholder="Email"></div>

                                        <label for="inputPass" class="col-sm-2 control-label">Mật khẩu</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputPass" type="password" placeholder="Mật khẩu"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-1 control-label">Tên</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputName" type="text" placeholder="Tên tài khoản"></div>

                                        <label for="inputAddress" class="col-sm-2 control-label">Địa chỉ</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputAddress" type="text" placeholder="Địa chỉ tài khoản"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-sm-1 control-label">Phone</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputPhone" type="tel" placeholder="Số điện thoại"></div>

                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-2">
                                            <button class="btn btn-success" type="submit" style="margin-left: 50%">Thêm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            @push('js')
                <script>
                    CKEDITOR.replace('content');
                </script>
            @endpush
        </section>
        <!-- /.content -->
    </div>
@endsection