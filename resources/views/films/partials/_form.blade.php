<div class="elements-block">
    <div class="inner">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                {!! form_text('title','Title','Enter item Title',null, $errors) !!}
                {!!  form_textarea('content', null,'Please add a brief description', '',$errors) !!}
                {!! form_select2_categories('category','Genre',$errors,!empty($categories)? $categories : '', trans('nav.selectCategory')) !!}

                <label for="image">Image</label>
                <input type="file" id="image" class="form-control" name="file">

                {!! form_price('ticketPrice',null,'e.g. 999',null, $errors) !!}

                @inject('countries','App\Http\Utilities\Country')


                {!! form_select('country','Country',null,$errors,$countries::all(), !empty($country) ? $country : null, true,trans('nav.selectCountry'),false) !!}
                {!! form_select('rating','Rating',null, $errors,[
                 '1'=> '1 Star',
                  '2'=> '2 Star',
                  '3'=> '3 Star',
                  '4'=> '4 Star',
                  '5'=> '5 Star',
             ]) !!}

                {!! form_text('releaseDate','Release Date','Select Date',null, $errors) !!}

            </div>
        </div>
    </div>
</div>