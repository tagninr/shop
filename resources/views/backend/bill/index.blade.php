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
                            <li><a href="#add" data-toggle="tab">Thêm</a></li>
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
                            <div class="tab-pane" id="add">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Tên</label>
                                        <div class="col-sm-4"><input type="text" class="form-control" id="inputName" placeholder="Tên sản phẩm"></div>

                                        <label for="inputCategory" class="col-sm-2 control-label">Danh mục</label>
                                        <div class="col-sm-4"><select class="select2-selection__rendered form-control chosen-select" id="inputCategory" data-placeholder="Danh mục sản phẩm"></select></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUnitPrice" class="col-sm-2 control-label">Giá</label>
                                        <div class="col-sm-4"><input type="number" class="form-control" id="inputUnitPrice" placeholder="Giá"></div>

                                        <label for="inputPromotionPrice" class="col-sm-2 control-label">Khuyến mãi</label>
                                        <div class="col-sm-4"><input type="number" class="form-control" id="inputPromotionPrice" placeholder="Giá khuyến mãi"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUnit" class="col-sm-2 control-label">Đơn vị</label>
                                        <div class="col-sm-4"><input type="text" class="form-control" id="inputUnit" placeholder="Đơn vị tính"></div>

                                        <label for="inputStatus" class="col-sm-2 control-label">Trạng thái</label>
                                        <div class="col-sm-4">
                                            <label class="control-label radio-inline"><input type="radio" id="inputStatus" value="0">Chưa xóa</label>
                                            <label class="control-label radio-inline"><input type="radio" id="inputStatus" value="1">Đã xóa</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputImage" class="col-sm-2 control-label">Hình ảnh</label>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control" id="inputImage" title="Chọn hình ảnh sản phẩm" data-msg-placeholder="Chọn hình ảnh sản phẩm" data-allowed-file-extensions='["png", "jpg", "gif", "jpeg"]'>
                                        </div>

                                        <label for="inputDescription" class="col-sm-2 control-label">Mô tả</label>
                                        <div class="col-sm-4"><textarea class="form-control" id="inputDescription" placeholder="Mô tả"></textarea></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Thêm</button>

                                            <button type="submit" class="btn btn-danger" style="margin-left: 20px">Xóa</button>

                                            <button type="submit" class="btn btn-warning" style="margin-left: 20px">Sửa</button>
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
        </section>
        <!-- /.content -->
    </div>
@endsection