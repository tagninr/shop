{{ csrf_field() }}

<div class="box-body">
    <div class="form-group">
        <label>{{ __('validation.attributes.backend.access.pages.title') }} <span class="require">*</span></label>
        <input type="text" class="form-control" placeholder="" name="title" id="title"
               value="{{ old('title', $page->title) }}">
    </div>

    <div class="form-group">
        <label>{{ __('validation.attributes.backend.access.pages.slug') }} <span class="require">*</span></label>
        <input @if($page->slug) disabled @endif title="" type="text" class="form-control" name="slug" value="{{ old('slug', $page->slug) }}"
               id="slug">
    </div>

    <div class="form-group">
        <label>{{ __('validation.attributes.backend.access.pages.parent_id') }} </label>
        <select data-placeholder="Empty" title="" class="form-control" name="parent_id" id="parent_id">
            <option value></option>
            @if($parent_page)
                @foreach($parent_page as $value)
                    <option @if($page->parent_id == $value->id) selected @endif value="{{ $value->id }}">{{ $value->title }}</option>
                @endforeach
            @endif
        </select>
    </div>

    <div class="form-group">
        <label>{{ __('validation.attributes.backend.access.pages.content') }} <span class="require">*</span></label>
        <textarea name="content" rows="5" title=""
                  style="width: 100%">{{ old('content', $page->content) }}</textarea>
    </div>

    <div class="form-group">
        <label>{{ __('validation.attributes.backend.access.pages.status') }}</label>
        <div class="form-group">
            <label class="radio-inline">
                <input {{ $page->is_published == 1 ? 'checked' : '' }} type="radio"
                       name="is_published" value="1">Published
            </label>
            <label class="radio-inline">
                <input {{ $page->is_published == 0 ? 'checked' : '' }} type="radio"
                       name="is_published" value="0">Not Published
            </label>
        </div>
    </div>
</div>

<div class="box-footer">
    @include('backend.partials.btn')
</div>

@push('js')
    <script>
        var optCKEditor = optCKEditor();
        CKEDITOR.replace('content', optCKEditor);
    </script>
@endpush