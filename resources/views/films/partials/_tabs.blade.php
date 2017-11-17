<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle btn-block " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>

<ul id="item-nav" class="tabs"  aria-labelledby="dropdownMenu1">
    <li class="{{ setActive('films/'.$film->slug) }}">
        <a href="{{ URL::route('films.show',$item->slug) }}">Item Details</a>
    </li>

    <li class="{{ setActive('films/'.$film->slug.'/bookings') }}">
        <a href="{{ URL::route('films.bookings',$film->slug) }}">Bookings
            @if (Auth::user() && Auth::user()->can('update', $film))
                @if(bookingsCount($film,'new') > 0)
                     <span class="label label-info">New - {!! bookingsCount($film,'new') !!}</span>
                @endif
            @endif
        </a>
    </li>

    <li class="{{ setActive('films/'.$film->slug.'/reviews') }}">
        <a href="{{ URL::route('films.reviews',$film->slug) }}">Reviews ({!! bookingsCount($film,'reviews') !!})</a>
    </li>
</ul>

</div>