@extends('backend.layout.master')
@section('title')
    Thương hiệu | AdminLD
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thương hiệu
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{URL::route('index')}}"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">Thương hiệu</li>
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
                                        <h3 class="box-title">Chi tiết thông tin thương hiệu</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="3%">ID</th>
                                                <th width="12%">Tên thương hiệu</th>
                                                <th width="40%">Mô tả</th>
                                                <th width="13%">Ngày tạo</th>
                                                <th width="13%">Ngày cập nhật</th>
                                                <th width="9%">Trạng thái</th>
                                                <th width="10%">Thao tác</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($brand as $bra)
                                                <tr>
                                                    <td>{{$bra->id}}</td>
                                                    <td>{{$bra->name}}</td>
                                                    <td>{{$bra->description}}</td>
                                                    <td>{{$bra->created_at}}</td>
                                                    <td>{{$bra->updated_at}}</td>
                                                    <td>
                                                        @if($bra->status == 1)
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
                                        <div class="col-sm-5"><input type="text" class="form-control" id="inputName" placeholder="Tên thương hiệu"></div>

                                        <label for="inputStatus" class="col-sm-2 control-label">Trạng thái</label>
                                        <div class="col-sm-4">
                                            <label class="control-label radio-inline"><input id="inputStatus" type="radio" name="rdoStatus" value="1">Hiện</label>
                                            <label class="control-label radio-inline"><input id="inputStatus" type="radio" name="rdoStatus" value="0">Ẩn</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription" class="col-sm-1 control-label">Mô tả</label>
                                        <div class="col-sm-5"><textarea class="form-control" id="inputDescription" placeholder="Mô tả"></textarea></div>

                                        <label for="inputDescription" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-3">
                                            <button class="btn btn-success" type="submit" style="margin: 2%">Thêm</button>
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