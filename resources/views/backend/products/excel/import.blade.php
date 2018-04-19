@extends('backend.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-danger">
                <h4>Danger Alert !</h4>

                <p>If you import product from Excel file, current product will be destroy. Be careful !</p>
            </div>
        </div>

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Import data from Excel File</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('backend.execel.post_import') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="box-body">
                        <div class="form-group">
                            <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Select Excel file...</span>
                                <input type="file" id="exampleInputFile" name="file">
                            </span>

                            <p class="help-block">Please select file size < 2MB</p>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection