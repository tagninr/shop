@extends('backend.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a href="{{ route('backend.product.create') }}"
                               class="btn btn-primary btn-flat">{{ __('buttons.general.crud.create') }}</a>
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <table id="products" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>{{ __('labels.general.id') }}</th>
                            <th>{{ __('labels.backend.access.products.table.image') }}</th>
                            <th>{{ __('labels.backend.access.products.table.sku') }}</th>
                            <th>{{ __('labels.backend.access.products.table.name') }}</th>
                            <th>{{ __('labels.backend.access.products.table.price') }}</th>
                            <th>{{ __('labels.backend.access.products.table.view') }}</th>
                            <th>{{ __('labels.backend.access.products.table.quantity') }}</th>
                            <th>{{ __('labels.backend.access.products.table.category_id') }}</th>
                            <th>{{ __('labels.backend.access.products.table.status') }}</th>
                            <th>{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img src="{{ $product->thumb }}" class="img-thumbnail" style="width: 35px"></td>
                                <td>{{ $product->sku }}</td>
                                <td><a href="{{ $product->link }}" target="_blank">{{ $product->name }}</a></td>
                                <td>{{ $product->price }} $</td>
                                <td>{{ $product->view }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->category->name ?? 'Uncategorized' }}</td>
                                <td>{!! $product->getStatus() !!}</td>
                                <td>
                                    <a href="{{ route('backend.product.edit', $product->id) }}">
                                        <button class="btn btn-xs btn-warning">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                    </a>

                                    <a href="{{ route('backend.product.destroy', $product->id) }}"
                                       onclick="return confirmDelete()">
                                        <button class="btn btn-xs btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(function () {
            $('#products').dataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis'
                ],
                columnDefs: [{
                    // targets: 0,
                    visible: false
                }]
            });
        });
    </script>
@endpush