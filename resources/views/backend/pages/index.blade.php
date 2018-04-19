@extends('backend.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a href="{{ route('backend.page.create') }}" class="btn btn-primary btn-flat">Create</a>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <table id="pages" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>{{ __('labels.backend.access.pages.table.title') }}</th>
                            <th>{{ __('labels.backend.access.pages.table.slug') }}</th>
                            <th>{{ __('labels.backend.access.pages.table.parent_id') }}</th>
                            <th>{{ __('labels.backend.access.pages.table.content') }}</th>
                            <th>{{ __('labels.backend.access.pages.table.status') }}</th>
                            <th width="7%">{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>
                                    <a href="{{ $page->link }}" target="_blank">{{ $page->slug }}</a>
                                </td>
                                <td>
                                    <a @if($page->parent != null) href="{{ $page->parent->link }}" @endif target="_blank">{{ $page->parent->slug or 'Empty'}}</a>
                                </td>
                                <td>{!! strip_tags(str_limit($page->content, 100)) !!}</td>
                                <td>{!! $page->status !!}</td>
                                <td>
                                    <a href="{{ route('backend.page.edit', $page->id) }}">
                                        <button class="btn btn-xs btn-warning">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                    </a>

                                    <a href="{{ route('backend.page.delete', $page->id) }}" onclick="return confirmDelete()">
                                        <button class="btn btn-xs btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(function () {
            $('#pages').dataTable();
        });
    </script>
@endpush
