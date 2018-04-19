@extends('backend.layout.master')

@section('content')
    <div class="row">
        <form role="form" action="{{ route('backend.product.store') }}" method="post" enctype="multipart/form-data">
            @include('backend.products._form', ['btnName' => __('buttons.general.crud.create')])
        </form>
    </div>
@endsection

@push('js')
    <script>
        $(function () {
            $('#slug').slugify('#name');
        });
    </script>
@endpush