@extends('backend.layout.master')
@section('title')
    Hóa đơn | AdminLD
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Hóa đơn
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">Hóa đơn</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#list" data-toggle="tab">Danh sách</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="list">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Chi tiết thông tin hóa đơn</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="2%">ID</th>
                                                <th width="11%">Mã khách hàng</th>
                                                <th width="7%">Ngày đặt</th>
                                                <th width="8%">Tổng tiền</th>
                                                <th width="11%">Mã thanh toán</th>
                                                <th width="11%">Ghi chú</th>
                                                <th width="9%">Ngày tạo</th>
                                                <th width="11%">Ngày cập nhật</th>
                                                <th width="8%">Tình trạng</th>
                                                <th width="8%">Trạng thái</th>
                                                <th width="15%">Thao tác</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($bills as $bill)
                                                <tr>
                                                    <td>{{$bill->id}}</td>
                                                    <td>{{$bill->id_customer}}</td>
                                                    <td>{{$bill->date_order}}</td>
                                                    <td style="color: blue;">{{number_format($bill->total, 0, ',', '.')}} &#x20ab;</td>
                                                    <td>{{$bill->payment}}</td>
                                                    <td>{{$bill->note}}</td>
                                                    <td>{{$bill->created_at}}</td>
                                                    <td>{{$bill->updated_at}}</td>
                                                    <td>{{$bill->status}}</td>
                                                    <td>
                                                        @if($bill->deleted == 0)
                                                            <span class="badge bg-green">Sống</span>
                                                        @else
                                                            <span class="badge bg-red">Chết</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a {{--href="{{URL::route('#', $cat->id)}}"--}}>
                                                            <button class="btn btn-sm btn-info" title="Chi tiết sản phẩm của hóa đơn này" style="margin-right: 1em;"><i class="fa fa-info-circle"></i></button>
                                                        </a>
                                                        <a {{--href="{{URL::route('#', $cat->id)}}"--}}>
                                                            <button class="btn btn-sm btn-warning" title="Chỉnh sửa thông tin hóa đơn" style="margin-right: 1em;"><i class="fa fa-pencil"></i></button>
                                                        </a>
                                                        <a {{--href="{{URL::route('#', $cat->id)}}"--}} onclick="return xacNhanXoa('Bạn có muốn xóa không ?')">
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
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection