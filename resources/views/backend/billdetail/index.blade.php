@extends('backend.layout.master')
@section('title')
    Chi tiết hóa đơn | AdminLD
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Chi tiết hóa đơn
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{URL::route('index')}}"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">Chi tiết hóa đơn</li>
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
                                        <h3 class="box-title">Chi tiết hóa đơn</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="5%">ID</th>
                                                <th width="11%">Mã hóa đơn</th>
                                                <th width="11%">Mã sản phẩm</th>
                                                <th width="8%">Số lượng</th>
                                                <th width="9%">Đơn giá</th>
                                                <th width="17%">Ngày tạo</th>
                                                <th width="17%">Ngày cập nhật</th>
                                                <th width="10%">Trạng thái</th>
                                                <th width="10%">Thao tác</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($billDetail as $detail)
                                                <tr>
                                                    <td>{{$detail->id}}</td>
                                                    <td>{{$detail->id_bill}}</td>
                                                    <td>{{$detail->id_product}}</td>
                                                    <td>{{$detail->quantity}}</td>
                                                    <td>{{$detail->unit_price}}</td>
                                                    <td>{{$detail->created_at}}</td>
                                                    <td>{{$detail->updated_at}}</td>
                                                    <td>
                                                        @if(($detail->id_bill) % 2 == 0)
                                                            <span class="badge bg-green">Hiện</span>
                                                        @else
                                                            <span class="badge bg-red">Ẩn</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a {{--href="{{URL::route('#', $cat->id)}}"--}}>
                                                            <button class="btn btn-sm btn-warning" style="margin-right: 1em;"><i class="fa fa-pencil"></i></button>
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