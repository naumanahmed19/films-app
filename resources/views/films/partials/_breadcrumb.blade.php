
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="/">Home</a></li>

            {!!  (!empty($city)) ? '<li><a href="/'.slugify($city).'"> '. ucwords($city).'</a></li>' : '' !!}

            @if(isRoute('items.show'))

         

                <li>{{$item->city}}</li>
                @if(!empty($item->category()))
                     <li><a href="/{{$item->category()->slug}}">{{$item->category()->name}}</a></li>
                 @endif
                <li>{{$item->title}}</li>

            @endif
      
            @if(isRoute('items.bookings'))
             
              <li><a href="{{$item->title}}">{{$item->title}}</a></li>

              <li>Bookings</li>
            
            @endif

                   
            @if(isRoute('items.reviews'))
             
              <li><a href="{{$item->title}}">{{$item->title}}</a></li>

              <li>Reviews</li>
            
            @endif

 
          

            {{--@if($isSearch)--}}

                {{--<li>Search Results For</li>--}}

                {{--<li>--}}
                    {{--{!!  (!empty($city)) ? '<span>'. ucwords($city).'<a href="/'.slugify($city).'"> <i class="fa fa-close"></i></a></span>' : '' !!}--}}

                    {{--{!!(!empty($category)) ? '<span>'. $category.'<a href="/'.slugify($category).'"> <i class="fa fa-close"></i></a></span>' : '' !!}--}}
                {{--</li>--}}

            {{--@else--}}

                @if(!empty($categoryName))


                    @if($categoryName->parent)

                        <li><a href="{{$categoryName->parent->slug}}">{{$categoryName->parent->name}}</a> </li>

                    @endif

                    <li>{{$categoryName->name}}</li>

                    @else


                    {!!(!empty($category)) ? '<li><a href="/'.slugify($category).'"> '. $category.'</a></li>' : '' !!}

                @endif

            {{--@endif--}}

        </ul>
    </div>
</div>

