@extends('backend.layout.master')

@section('content')
    <div class="row">
        <form role="form" action="{{ route('backend.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @include('backend.products._form', ['btnName' => __('buttons.general.crud.update')])
        </form>
    </div>
@endsection