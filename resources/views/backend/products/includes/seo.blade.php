<div class="tab-pane" id="tab_2">
    <div class="box-body">
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        <label for="">{{ __('validation.attributes.backend.access.products.meta.title') }}</label>
                        <input title="" type="text" class="form-control" id="meta_title" name="meta_title" maxlength="100" value="{{ old('meta_title', $product->meta_title) }}">
                    </div>

                    <div class="form-group form-md-line-input">
                        <label for="">{{ __('validation.attributes.backend.access.products.meta.keywords') }}</label>
                        <textarea title="" class="form-control maxlength-handler" rows="5" name="meta_keywords" maxlength="255">{{ old('meta_keywords', $product->meta_keywords) }}</textarea>
                    </div>

                    <div class="form-group form-md-line-input">
                        <label for="">{{ __('validation.attributes.backend.access.products.meta.description') }}</label>
                        <textarea title="" class="form-control maxlength-handler" rows="5" name="meta_description" maxlength="1000">{{ old('meta_description', $product->meta_description) }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>