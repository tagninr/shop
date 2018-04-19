<div class="form-group">
    <label>{{ __('validation.attributes.backend.access.products.status') }}</label>
    <div class="form-group">
        <label class="radio-inline">
            <input {{ old('is_published', $product->is_published) == 1 ? 'checked' : '' }} type="radio" name="is_published" value="1">Published
        </label>
        <label class="radio-inline">
            <input {{ old('is_published', $product->is_published) == 0 ? 'checked' : '' }} type="radio" name="is_published" value="0">Not Published
        </label>
    </div>

    <div class="form-group">
        <label class="radio-inline">
            <input {{ old('is_featured', $product->is_featured) == 1 ? 'checked' : '' }} type="radio" name="is_featured" value="1">Featured
        </label>
        <label class="radio-inline">
            <input {{ old('is_featured', $product->is_featured) == 0 ? 'checked' : '' }} type="radio" name="is_featured" value="0">Not Featured
        </label>
    </div>
</div>