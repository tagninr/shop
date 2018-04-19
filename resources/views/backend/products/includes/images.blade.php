<div class="tab-pane" id="tab_3">
    <div class="row">
        <div class="col-md-12">
            <div id="upload">
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Select multiple files...</span>
                    <input type="file" id="fileupload" name="photos[]" data-url="{{ route('backend.images.upload') }}" multiple/>
                </span>
            </div>

            <br/>
            <div id="files_list"></div>

            <p id="loading"></p>

            <!-- Hien thi hinh anh sau khi upload -->
            <input type="hidden" name="file_ids" id="file_ids" value=""/>

            @if(count($product->images) > 0)
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>Image</td>
                            <td>Name</td>
                            <td>Size</td>
                            <td>Type</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product->images as $image)
                            <tr id="tr-{{ $image->id }}">
                                <td>
                                    <a href="{{ $image->cover }}" target="_blank" class="fancybox-button" data-rel="fancybox-button">
                                        <img class="img-round" src="{{ $image->cover }}" style="width: 40px; height: 40px">
                                    </a>
                                </td>
                                <td>{{ mb_substr($image->file_name, 8) }}</td>
                                <td>{{ sizeOfFile(public_path('upload/products/'.$image->file_name)) }} KB</td>
                                <td>{{ $image->file_type }}</td>
                                <td>
                                    <a href="javascript:;" onclick="deleteOldImage({{ $image->id }})" class="btn btn-danger btn-sm delete">
                                        <i class="fa fa-times"></i> Remove
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>