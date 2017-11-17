@php
            if(!empty(Request::get('city')))
            {
                $city = Request::get('city');
            }

            if(!empty(Request::get('category')))
            {

                $category = Request::get('category');
            }
            $q = '';
            
            if(!empty(Request::get('q')))
            {

                $q = Request::get('q');
            }

            if(!empty($categoryName)){

                $category = $categoryName->slug;


            }

@endphp
<div class="row">

    {!! Form::open(['route'=> ['items.search'],'method' =>'GET'] ) !!}

    <input name="q" type="hidden" value="{{$q}}" placeholder="Keywords">
    <input name="city" type="hidden" value="{{!empty($city) ?  ucwords($city) : ''}}">
    <input name="category" type="hidden" value="{{!empty($category) ? $category : ''}}">



<div class="col-md-4">
    <div class="range-widget">
        <div class="range-inputs">
            <input  class="autosubmit" name="rentFrom" placeholder="Price from" type="text"  value="{{!empty(Request::get('rentFrom')) ? Request::get('rentFrom') : null}}">
            <input  class="autosubmit" name="rentTo" placeholder="Price to" type="text"  value="{{!empty(Request::get('rentTo')) ? Request::get('rentTo') : null}}">
        </div>
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>

</div>
    <div class="col-md-2">

         @include('items.partials.filter._rentType')

    </div>




    {!! Form::close() !!}

</div>