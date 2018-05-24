@extends('backend.layout.master')
@section('title')
    Khách hàng | AdminLD
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Khách hàng
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">Khách hàng</li>
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
                                        <h3 class="box-title">Chi tiết thông tin khách hàng</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="3%">ID</th>
                                                <th width="15%">Tên khách hàng</th>
                                                <th width="9%">Giới tính</th>
                                                <th width="10%">Email</th>
                                                <th width="10%">Địa chỉ</th>
                                                <th width="10%">SĐT</th>
                                                <th width="10%">Ngày tạo</th>
                                                <th width="12%">Ngày cập nhật</th>
                                                <th width="10%">Trạng thái</th>
                                                <th width="12%">Thao tác</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($customer as $cus)
                                                <tr>
                                                    <td>{{$cus->id}}</td>
                                                    <td>{{$cus->name}}</td>
                                                    <td>{{$cus->gender}}</td>
                                                    <td>{{$cus->email}}</td>
                                                    <td>{{$cus->address}}</td>
                                                    <td>{{$cus->phone}}</td>
                                                    <td>
                                                        @php
                                                            \Carbon\Carbon::setLocale('vi');
                                                        @endphp
                                                        {{\Carbon\Carbon::createFromTimestamp(strtotime($cus->created_at))->diffForHumans()}}
                                                    </td>
                                                    <td>
                                                        @php
                                                            \Carbon\Carbon::setLocale('vi');
                                                        @endphp
                                                        {{\Carbon\Carbon::createFromTimestamp(strtotime($cus->updated_at))->diffForHumans()}}
                                                    </td>
                                                    <td>
                                                        @if($cus->status == 1)
                                                            <span class="badge bg-green">Hiện</span>
                                                        @else
                                                            <span class="badge bg-red">Ẩn</span>
                                                        @endif
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
                                        <label for="inputName" class="col-sm-1 control-label">Tên</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputName" type="text" placeholder="Tên khách hàng"></div>

                                        <label for="inputGender" class="col-sm-2 control-label">Giới tính</label>
                                        <div class="col-sm-4">
                                            <label class="control-label radio-inline"><input id="inputGender" type="radio" name="rdoGender" value="1">Nam</label>
                                            <label class="control-label radio-inline"><input id="inputGender" type="radio" name="rdoGender" value="0">Nữ</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-1 control-label">Email</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputEmail" type="email" placeholder="Email"></div>

                                        <label for="inputAddress" class="col-sm-2 control-label">Địa chỉ</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputAddress" type="text" placeholder="Địa chỉ khách hàng"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-sm-1 control-label">Phone</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputPhone" type="tel" placeholder="Số điện thoại"></div>

                                        <label for="inputStatus" class="col-sm-2 control-label">Trạng thái</label>
                                        <div class="col-sm-2">
                                            <label class="control-label radio-inline"><input id="inputStatus" type="radio" name="rdoStatus" value="1">Hiện</label>
                                            <label class="control-label radio-inline"><input id="inputStatus" type="radio" name="rdoStatus" value="0">Ẩn</label>
                                        </div>
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