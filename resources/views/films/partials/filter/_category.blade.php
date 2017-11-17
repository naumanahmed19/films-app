@php


   if(!empty(Request::get('category'))){

        $category = Request::get('category');
   }

   if(!empty($category->name)){

        $category = $category->name;

    }


@endphp

<div class="mega-filtered-search pull-left">
    <div class="mega-dropdown mega-dropdown-category">

        <button v-if="category">@{{ _.capitalize(category) }}</button>
        <button v-else>{{ (!empty($category)) ? $category : 'Select Category'}}</button>

        <i class="fa fa-navicon"></i>
        <div class="mega-content">
            <input type="hidden" class="auto_submit_item" name="category" v-model="category">
            <ul class="category-list">
                <li @click.prevent="allCats()" >
                    <a href="#" ><i class="adicon-grid"></i>All Categories</a></li>

                @foreach(cats() as $node)

                {!! renderNode($node) !!}

                @endforeach

                </li>

            </ul>
        </div>
    </div>
</div>