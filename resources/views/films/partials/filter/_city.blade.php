@php

    if(!empty( Request::get('city')))
    {
       $city = Request::get('city');

    }

@endphp
<div class="mega-filtered-search pull-left">
    <div class="mega-dropdown mega-dropdown-category ">

        <button  v-if="city">@{{  _.capitalize(city) }}</button>
        <button v-else>{!!  (!empty($city)) ? ucwords($city).'' : 'Select City ' !!}</button>

        <i class="fa fa-navicon"></i>
        <div class="mega-content">

            @inject('cities','App\Http\Utilities\Country')

            <input type="text" class="auto_submit_item" name="city" v-model="city">
            {{--<input type="text" name="city" v-model="city" v-model="citySearch">--}}

            <input type="text" placeholder="Search City" v-model="filter">

            <ul class="category-list">
                <li @click.prevent="cityf('All Cities')" ><a href="#" ><i class="adicon-grid"></i>All Cities</a></li>

                <li v-for="item in filteredItems"><a @click.prevent="cityf(item)">@{{ item }}</li></a>

            </ul>
        </div>
    </div>
</div>