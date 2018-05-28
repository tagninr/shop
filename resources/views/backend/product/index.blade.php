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
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">Sản phẩm</li>
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
                            {{--<li><a href="#interactive" data-toggle="tab">Tương tác</a></li>--}}
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="list">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Chi tiết thông tin sản phẩm</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="2%">ID</th>
                                                <th width="12%">Tên sản phẩm</th>
                                                <th width="10%">Danh mục</th>
                                                <th width="9%">Hình ảnh</th>
                                                <th width="3%">Mô tả</th>
                                                <th width="8%">Giá bán</th>
                                                <th width="11%">Khuyến mãi</th>
                                                <th width="9%">Ngày tạo</th>
                                                <th width="14%">Ngày cập nhật</th>
                                                <th width="10%">Trạng thái</th>
                                                <th width="13%">Thao tác</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($product as $pro)
                                                <tr>
                                                    <td>{{$pro->id}}</td>
                                                    <td>{{$pro->name}}</td>
                                                    <td>
                                                        @php
                                                            $cat = DB::table('type_products')->where('id', $pro->id_type)->first();
                                                            echo $cat->name;
                                                        @endphp
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-xs-6 col-md-3">
                                                                <a>
                                                                    <img width="40" height="40" alt="{{$pro->ten}}" src="{{url('/source/image/product', $pro->image)}}">
                                                                    {{--<img width="80" height="80" alt="{{$pro->ten}}" src="{{('/source/image/product/'. $pro->image)}}">--}}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$pro->description}}</td>
                                                    <td style="color: blue;">{{number_format($pro->unit_price, 0, ',', '.')}} &#x20ab;</td>
                                                    <td style="color: blue;">{{number_format($pro->promotion_price, 0, ',', '.')}} &#x20ab;</td>
                                                    <td>{{$pro->created_at}}</td>
                                                    <td>{{$pro->updated_at}}</td>
                                                    {{--<td>
                                                        @php
                                                            \Carbon\Carbon::setLocale('vi');
                                                        @endphp
                                                        {{\Carbon\Carbon::createFromTimestamp(strtotime($pro->created_at))->diffForHumans()}}
                                                    </td>
                                                    <td>
                                                        @php
                                                            \Carbon\Carbon::setLocale('vi');
                                                        @endphp
                                                        {{\Carbon\Carbon::createFromTimestamp(strtotime($pro->updated_at))->diffForHumans()}}
                                                    </td>--}}
                                                    <td>
                                                        @if($pro->status == 1)
                                                            <span class="badge bg-green">Hiện</span>
                                                        @else
                                                            <span class="badge bg-red">Ẩn</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::route('editPro', $pro->id)}}">
                                                            <button class="btn btn-sm btn-warning" style="margin-right: 1em;"><i class="fa fa-pencil"></i></button>
                                                        </a>
                                                        <a onclick="return xacNhanXoa('Bạn có muốn xóa không ?')"
                                                        {{--href="{{URL::route('#', $cat->id)}}"--}} >
                                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                        </a>
                                                    </td>
                                                    {{--<td>
                                                        @if($pro->status == 1)
                                                            <span class="badge bg-green">Còn hàng</span>
                                                            @if($pro->status == 1)
                                                                <span class="badge bg-yellow">Nổi bật</span>
                                                            @endif

                                                            @if($pro->status == 1)
                                                                <span class="badge bg-aqua">Ẩn</span>
                                                            @endif
                                                        @else
                                                            <span class="badge bg-red">Hết hàng</span>
                                                            @if($pro->status == 1)
                                                                <span class="badge bg-aqua">Ẩn</span>
                                                            @endif
                                                        @endif
                                                    </td>--}}
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
                                        <div class="col-sm-4"><input type="text" class="form-control" id="inputName" placeholder="Tên sản phẩm"></div>

                                        <label for="inputCategory" class="col-sm-2 control-label">Danh mục</label>
                                        <div class="col-sm-4">
                                            <select class="select2-selection__rendered form-control chosen-select" id="inputCategory" data-placeholder="Danh mục sản phẩm" name="cmbCategory">
                                                @foreach($category as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUnitPrice" class="col-sm-1 control-label">Giá</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputUnitPrice" placeholder="Giá bán" type="number" name="nudGia" min="50000" max="10000000" value="{{old('nudGia')}}"></div>

                                        <label for="inputPromotionPrice" class="col-sm-2 control-label">Khuyến mãi</label>
                                        <div class="col-sm-4"><input class="form-control" id="inputPromotionPrice" placeholder="Giá khuyến mãi" type="number" name="nudGiaKM" min="0" max="10000000" value="{{old('nudGiaKM')}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUnit" class="col-sm-1 control-label">Đơn vị</label>
                                        <div class="col-sm-4"><input type="text" class="form-control" id="inputUnit" placeholder="Đơn vị tính"></div>

                                        <label for="inputImage" class="col-sm-2 control-label">Hình ảnh</label>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control" id="inputImage" title="Chọn hình ảnh cho sản phẩm" data-msg-placeholder="Chọn hình ảnh cho sản phẩm" data-allowed-file-extensions='["png", "jpg", "gif", "jpeg"]'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription" class="col-sm-1 control-label">Mô tả</label>
                                        <div class="col-sm-4"><textarea class="form-control" id="inputDescription" placeholder="Mô tả sản phẩm"></textarea></div>

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
                            {{--<div class="tab-pane" id="interactive">
                                <!-- The timeline -->
                                <ul class="timeline timeline-inverse">
                                    <!-- timeline time label -->
                                    <li class="time-label">
                                        <span class="bg-red">
                                            10 Feb. 2014
                                        </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-envelope bg-blue"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                            <div class="timeline-body">
                                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                quora plaxo ideeli hulu weebly balihoo...
                                            </div>
                                            <div class="timeline-footer">
                                                <a class="btn btn-primary btn-xs">Read more</a>
                                                <a class="btn btn-danger btn-xs">Delete</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-user bg-aqua"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                                            </h3>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-comments bg-yellow"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                            <div class="timeline-body">
                                                Take me to your leader!
                                                Switzerland is small and neutral!
                                                We are more like Germany, ambitious and misunderstood!
                                            </div>
                                            <div class="timeline-footer">
                                                <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline time label -->
                                    <li class="time-label">
                                        <span class="bg-green">
                                           3 Jan. 2014
                                        </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-camera bg-purple"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                            <div class="timeline-body">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <li>
                                        <i class="fa fa-clock-o bg-gray"></i>
                                    </li>
                                </ul>
                            </div>--}}
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