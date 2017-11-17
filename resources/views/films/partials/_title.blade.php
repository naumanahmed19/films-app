@php

    $itemsCount = $items->count();

    if($itemsCount > 0)
    {

          if(!empty( Request::get('city')))
          {
             $city = Request::get('city');

          }
          if(!empty( Request::get('rent_type')))
          {
             $rent_type =Request::get('rent_type');

          }

         if(!empty(Request::get('category'))){

              $category = Request::get('category');
         }

         if(!empty($category->name)){

              $category = $category->name;

      }

    if(!empty($category) && !empty($city)){

           $title = "{$category} items for rent in {$city}";

           $subtitle = "{$itemsCount} {$category} available for rent in {$city} right now";

        }elseif (!empty($category)){

            $title = $category;

            $subtitle = "{$itemsCount} {$category} items available for rent in pakistan";

        }elseif (!empty($city)){
            $title = 'Items for rent in '. ucwords($city);

            $subtitle = "{$itemsCount}  items available for rent in {$city}";

        }else{

            $title = "Looking for something to Rent ?";

            $subtitle = "No items available for requested combination but you may like following";

        }

    }else{

            $title = "Nothing found...";

            $subtitle = "No items available for requested combination but you may like following";


    }


@endphp