<div class="row field-block attributes">
    <div class="col-xs-12 col-md-3">
        <span class="label">Features <small>(optional)</small></span>
    </div>
    <div class="col-xs-12 col-md-9">
        <div class="row">
            <div class="col-md-6">
                <div class="icon-field">
                    <span>Brand</span>
                    {!! form_number('attr_brand',null,null,null, $errors) !!}
                    {{--<input type="text" name="country" id="autocomplete"/>--}}

                </div>
            </div>
            <div class="col-md-6">
                <div class="icon-field">
                    <span>Model</span>
                    {!! form_number('attr_model',null,null,null, $errors) !!}

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="icon-field">
                    <span>Condition</span>
                    {!! form_number('attr_condition',null,null,null, $errors) !!}

                </div>
            </div>
            <div class="col-md-6">
                <div class="icon-field">
                    <span>Color</span>
                    {!! form_number('attr_color',null,null,null, $errors) !!}

                </div>
            </div>


        </div>
        <div class="row">

        </div>
    </div>
</div>
