<div class="form-group">
    <label>{{ __('validation.attributes.backend.access.products.category_id') }}</label>
    <select data-placeholder="Select a category" title="" id="category_id" name="category_id" class="form-control chosen-select">
        <option value=""></option>
        @php
            multiple_category($categories, 0, $text = '&nbsp;&nbsp;', old('category_id', $product->category_id))
        @endphp
    </select>
</div>