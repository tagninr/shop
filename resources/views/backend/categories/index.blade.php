@extends('backend.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ __('labels.backend.access.categories.create') }}</h3>
                </div>

                <form role="form" action="{{ route('backend.category.store') }}" method="post">

                    {{ csrf_field() }}

                    <div class="box-body">
                        <div class="portlet light bordered">
                            <div class="portlet-body form">
                                <div class="form-body">

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.name') }}</label>
                                        <input title="" type="text" class="form-control" id="name" name="name"
                                               value="{{ old('name') }}"
                                               required>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.slug') }}</label>
                                        <input title="" type="text" class="form-control" id="slug" name="slug"
                                               value="{{ old('slug') }}"
                                               required>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.parent_category') }}</label>
                                        <select title="" data-placeholder="Empty" class="form-control chosen-select" id="parent_id" name="parent_id">
                                            <option value=""></option>
                                            @php
                                                multiple_category($parents, 0, $text = '&nbsp;&nbsp;', old('parent_id'))
                                            @endphp
                                        </select>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.meta.title') }}</label>
                                        <input title="" type="text" class="form-control" id="meta_title"
                                               name="meta_title" maxlength="100"
                                               value="{{ old('meta_title') }}">
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.meta.keywords') }}</label>
                                        <textarea title="" class="form-control maxlength-handler" rows="5"
                                                  name="meta_keywords"
                                                  maxlength="255">{{ old('meta_keywords') }}</textarea>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.meta.description') }}</label>

                                        <textarea title="" class="form-control maxlength-handler" rows="5"
                                                  name="meta_description"
                                                  maxlength="1000">{{ old('meta_description') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-actions noborder">
                                    <button type="submit"
                                            class="btn btn-primary">{{ __('buttons.general.crud.create') }}</button>
                                    <button type="reset" class="btn">{{ __('buttons.general.cancel') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ __('labels.backend.access.categories.management') }}</h3>
                </div>

                <div class="box-body">
                    <table id="categories" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>{{ __('labels.general.id') }}</th>
                            <th>{{ __('labels.backend.access.categories.table.name') }}</th>
                            <th>{{ __('labels.general.slug') }}</th>
                            <th>{{ __('labels.backend.access.categories.table.status') }}</th>
                            <th>{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td><a href="{{ url($category->slug) }}" target="_blank">{{ $category->slug }}</a></td>
                                <td>{!! $category->getStatus() !!}</td>
                                <td>
                                    <a href="{{ route('backend.category.edit', $category->id) }}">
                                        <button class="btn btn-xs btn-warning">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                    </a>

                                    <a href="{{ route('backend.category.destroy', $category->id) }}"
                                       onclick="return confirmDelete()">
                                        <button class="btn btn-xs btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                                {{--@if($category->childs)--}}
                                    {{--@foreach($category->childs as $child)--}}
                                        {{--<tr>--}}
                                            {{--<td>{{ $child->id }}</td>--}}
                                            {{--<td><strong>---</strong>{{ $child->name }}</td>--}}
                                            {{--<td><a href="{{ url($child->slug) }}" target="_blank">{{ $child->slug }}</a></td>--}}
                                            {{--<td>{!! $category->getStatus() !!}</td>--}}
                                            {{--<td>--}}
                                                {{--<a href="{{ route('backend.category.edit', $child->id) }}">--}}
                                                    {{--<button class="btn btn-xs btn-warning">--}}
                                                        {{--<i class="fa fa-pencil"></i>--}}
                                                    {{--</button>--}}
                                                {{--</a>--}}

                                                {{--<a href="{{ route('backend.category.destroy', $child->id) }}"--}}
                                                   {{--onclick="return confirmDelete()">--}}
                                                    {{--<button class="btn btn-xs btn-danger">--}}
                                                        {{--<i class="fa fa-trash"></i>--}}
                                                    {{--</button>--}}
                                                {{--</a>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                    {{--@endforeach--}}
                                {{--@endif--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection