{{ csrf_field() }}
<div class="col-md-8">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Content</a></li>
            <li><a href="#tab_2" data-toggle="tab">SEO</a></li>
            <li><a href="#tab_3" data-toggle="tab">Images</a></li>
        </ul>
        <div class="tab-content">
            @include('backend.products.includes.content')
            @include('backend.products.includes.seo')
            @include('backend.products.includes.images')
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="box box-primary">
        <div class="box-body">
            @include('backend.products.includes.categories')
            @include('backend.products.includes.tags')
            @include('backend.products.includes.status')
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{ $btnName or '' }}</button>
            <button type="reset" class="btn">{{ __('buttons.general.cancel') }}</button>
        </div>
    </div>
</div>

@push('js')
    <script src="/js/vendor/jquery.ui.widget.js"></script>
    <script src="/js/jquery.iframe-transport.js"></script>
    <script src="/js/jquery.fileupload.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        var optCKEditor = optCKEditor();
        CKEDITOR.replace('full_description', optCKEditor);
        CKEDITOR.replace('short_description', optCKEditor);

        function deleteOldImage(id) {
            id = parseInt(id);

            axios.delete(window.location.origin + '/admin/images/' + id + '/delete').then(function (response) {
                $('#tr-' + id).slideUp(600);
            });
        }

        function deleteImage(id) {
            id = parseInt(id);

            axios.delete(window.location.origin + '/admin/images/' + id + '/delete').then(function (response) {
                $('#row' + id).slideUp(600);
            });
        }

        $(function () {
            $('#fileupload').fileupload({
                dataType: 'json',
                add: function (e, data) {
                    $('#loading').text('Uploading...');
                    data.submit();
                },
                done: function (e, data) {
                    var result = '<table class="table table-hover">';
                    $.each(data.result.files, function (index, file) {
                        var id = file.fileID;
                        var url = '<td>' +
                            '<a href="' + file.url + '" class="fancybox-button"' +
                            'data-rel="fancybox-button">' +
                            '<img class="img-responsive" src="' + file.url + '" ' +
                            'style="width: 40px; height: 40px"></a></td>';

                        var name = '<td><a href="' + file.url + '" target="_blank">' + file.name + '</td>';
                        var size = '<td width="10%">' + file.size + ' KB </td>';
                        var type = '<td width="5%">' + file.type + '</td>';
                        var delete_image = '<td width="10%">' +
                            '<a onclick="deleteImage(' + id + ')" href="javascript:" id="image' + id + '" data-id="' + id + '" data-type="DELETE" class="btn btn-danger btn-sm delete"' +
                            '<i class="fa fa-times"></i> Remove </a></td>';

                        result += url + name + size + type + delete_image + '</tr></table>';

                        $('<p id="row' + id + '"/>').html(result).appendTo($('#files_list'));

                        if ($('#file_ids').val() != '') {
                            $('#file_ids').val($('#file_ids').val() + ',');
                        }
                        $('#file_ids').val($('#file_ids').val() + file.fileID);
                    });

                    $('#loading').text('');
                }
            });
        });
    </script>
@endpush