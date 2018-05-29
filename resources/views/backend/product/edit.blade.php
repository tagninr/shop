@extends('backend.layout.master')
@section('title')
    Sản phẩm | AdminLD
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sản phẩm
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{URL::route('index')}}"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">Sản phẩm</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#add" data-toggle="tab">Sửa</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="add">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-1 control-label">Tên</label>
                                        <div class="col-sm-4"><input type="text" class="form-control" id="inputName" name="namePro" placeholder="Tên sản phẩm" value="{{$product->name}}"></div>

                                        <label for="inputCategory" class="col-sm-2 control-label">Danh mục</label>
                                        <div class="col-sm-4">
                                            <select class="select2-selection__rendered form-control chosen-select" id="inputCategory" name="cmbCategory" data-placeholder="Danh mục sản phẩm">
                                                @foreach($category as $cat)
                                                    <option value="{{$cat->id}}"
                                                        @php if($cat->id == $type)
                                                            echo "selected="."selected";
                                                        @endphp>{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUnitPrice" class="col-sm-1 control-label">Giá</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputUnitPrice" placeholder="Giá bán" type="number" name="nudGia" min="50000" max="10000000" value="{{$product->unit_price}}"></div>

                                        <label for="inputPromotionPrice" class="col-sm-2 control-label">Khuyến mãi</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputPromotionPrice" placeholder="Giá khuyến mãi" type="number" name="nudGiaKM" min="0" max="10000000" value="{{$product->promotion_price}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUnit" class="col-sm-1 control-label">Đơn vị</label>
                                        <div class="col-sm-4"><input type="text" class="form-control" id="inputUnit" name="unit" placeholder="Đơn vị tính" value="{{$product->unit}}"></div>

                                        <label for="inputImage" class="col-sm-2 control-label">Hình ảnh</label>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control" id="inputImage" title="Chọn hình ảnh cho sản phẩm" data-msg-placeholder="Chọn hình ảnh cho sản phẩm" data-allowed-file-extensions='["png", "jpg", "gif", "jpeg"]'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription" class="col-sm-1 control-label">Mô tả</label>
                                        <div class="col-sm-4"><textarea class="form-control" id="inputDescription" name="description" placeholder="Mô tả sản phẩm">{{$product->description}}</textarea></div>

                                        <label for="inputStatus" class="col-sm-2 control-label">Trạng thái</label>
                                        <div class="col-sm-2">
                                            @if($product->status == 1)
                                                <label class="control-label radio-inline"><input id="inputStatus" type="radio" name="rdoStatus" checked="checked" value="1">Hiện</label>
                                                <label class="control-label radio-inline"><input id="inputStatus" type="radio" name="rdoStatus" value="0">Ẩn</label>
                                            @else
                                                <label class="control-label radio-inline"><input id="inputStatus" type="radio" name="rdoStatus" value="1">Hiện</label>
                                                <label class="control-label radio-inline"><input id="inputStatus" type="radio" name="rdoStatus" checked="checked" value="0">Ẩn</label>
                                            @endif
                                        </div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-warning" type="submit" href="{{URL::route('updatePro', $product->id)}}" style="margin-left: 50%">Sửa</button>
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