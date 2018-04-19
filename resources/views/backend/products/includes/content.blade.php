<div class="tab-pane active" id="tab_1">
    <div class="box-body">
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="">{{ __('validation.attributes.backend.access.products.name') }}</label>
                                <input title="" type="text" class="form-control" id="name"
                                       name="name"
                                       value="{{ old('name', $product->name) }}">
                            </div>

                            <div class="col-md-4">
                                <label for="">{{ __('validation.attributes.backend.access.products.sku') }}</label>
                                <input title="" type="text" class="form-control" id="sku"
                                       name="sku"
                                       value="{{ old('sku', $product->sku) }}">
                            </div>
                        </div>

                    </div>

                    <div class="form-group form-md-line-input">
                        <label for="">{{ __('validation.attributes.backend.access.products.slug') }}</label>
                        <input @if($product->slug) disabled @endif title="" type="text" class="form-control" id="slug" name="slug"
                               value="{{ old('slug', $product->slug) }}">
                    </div>

                    <div class="form-group form-md-line-input">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">{{ __('validation.attributes.backend.access.products.price') }}</label>
                                <input title="" type="text" class="form-control" id="price"
                                       name="price" min="1"
                                       value="{{ old('price', $product->price) }}">
                            </div>

                            <div class="col-md-6">
                                <label for="">{{ __('validation.attributes.backend.access.products.quantity') }}</label>
                                <input title="" type="number" class="form-control" id="quantity"
                                       name="quantity" min="1"
                                       value="{{ old('quantity', $product->quantity) }}">
                            </div>
                        </div>

                    </div>

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#short_description_tab">Short Description</a></li>
                        <li><a data-toggle="tab" href="#full_description_tab">Full Description</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="short_description_tab" class="tab-pane fade in active">
                            <br>
                            <div class="form-group form-md-line-input">
                                <label for="">{{ __('validation.attributes.backend.access.products.short_description') }}</label>
                                <textarea title="" class="form-control maxlength-handler" rows="5" name="short_description" maxlength="1000">{{ old('short_description', $product->short_description) }}</textarea>
                            </div>
                        </div>

                        <div id="full_description_tab" class="tab-pane fade in">
                            <br>
                            <div class="form-group form-md-line-input">
                                <label for="">{{ __('validation.attributes.backend.access.products.full_description') }}</label>
                                <textarea title="" class="form-control maxlength-handler" rows="5" name="full_description" maxlength="1000">{{ old('full_description', $product->full_description) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>