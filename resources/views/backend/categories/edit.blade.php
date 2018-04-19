@extends('backend.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ __('labels.backend.access.categories.edit') }}</h3>
                </div>

                <form role="form" action="{{ route('backend.category.update', $category->id) }}" method="post">

                    {{ method_field('PUT') }}

                    {{ csrf_field() }}

                    <div class="box-body">
                        <div class="portlet light bordered">

                            <div class="portlet-body form">
                                <div class="form-body">

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.name') }}</label>
                                        <input title="" type="text" class="form-control" id="name" name="name"
                                               value="{{ old('name') ?? $category->name }}"
                                               required>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.slug') }}</label>
                                        <input title="" type="text" class="form-control" id="slug" name="slug"
                                               value="{{ old('slug') ?? $category->slug }}"
                                               required>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.parent_category') }}</label>
                                        <select data-placeholder="Empty" title="" class="form-control chosen-select" id="parent_id" name="parent_id">
                                            <option value=""></option>
                                            @if($category->parent_id != 0)
                                                <option value="0">&nbsp;&nbsp;Empty</option>
                                            @endif
                                            @php
                                                multiple_category($parents, 0, $text = '&nbsp;&nbsp;', old('parent_id') ?? $category->parent_id, $category->id)
                                            @endphp
                                        </select>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.meta.title') }}</label>
                                        <input title="" type="text" class="form-control" id="meta_title"
                                               name="meta_title" maxlength="100"
                                               value="{{ old('meta_title') ?? $category->meta_title }}">
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.meta.keywords') }}</label>
                                        <textarea title="" class="form-control maxlength-handler" rows="5"
                                                  name="meta_keywords"
                                                  maxlength="255">{{ old('meta_keywords') ?? $category->meta_keywords }}</textarea>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label for="">{{ __('validation.attributes.backend.access.categories.meta.description') }}</label>

                                        <textarea title="" class="form-control maxlength-handler" rows="5"
                                                  name="meta_description"
                                                  maxlength="1000">{{ old('meta_description') ?? $category->meta_description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('validation.attributes.backend.access.categories.status') }}</label>
                                        <div class="form-group">
                                            <label class="radio-inline">
                                                <input {{ $category->is_published == 1 ? 'checked' : '' }} type="radio"
                                                       name="is_published" value="1">Published
                                            </label>
                                            <label class="radio-inline">
                                                <input {{ $category->is_published == 0 ? 'checked' : '' }} type="radio"
                                                       name="is_published" value="0">Not Published
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions noborder">
                                    <button type="submit" class="btn btn-primary">{{ __('buttons.general.crud.update') }}</button>
                                    <button type="reset" class="btn">{{ __('buttons.general.cancel') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/plugins/jquery-slugify/speakingurl.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-slugify/slugify.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#slug').slugify('#name');
        });
    </script>
@endpush
