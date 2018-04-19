<div class="form-group">
    <label>{{ __('validation.attributes.backend.access.products.tags') }}</label>
    <select name="tags[]" id="tags" multiple title="" data-placeholder="Add tag for product">
        @if(old('tags'))
            @foreach(old('tags') as $tag)
                <option value="{{ $tag }}" selected>{{ $tag }}</option>
            @endforeach
        @endif

        @if($product->tags)
            @foreach($product->tags->pluck('name') as $tag)
                <option value="{{ $tag }}" selected>{{ $tag }}</option>
            @endforeach
        @endif

        @foreach($tags as $tag)
            <option value="{{ $tag }}">{{ $tag }}</option>
        @endforeach
    </select>
</div>