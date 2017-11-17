 <div class="user-widget">


@php



@endphp
    @if(bookingsCount($item,'reviews') >0 )
        <small>Item Rating: <i>( based on {!! bookingsCount($item,'reviews') !!} reviews)</i>  </small> {!!  rating($item, 32) !!}

    @else
        <small>No one rated this item yet.</small>

    @endif

    <hr>
    <div class="renter-avatar pull-left">
        {!!  userAvatar('thumb-profile', $author) !!}
    </div>
    <div class="renter-info">
        <h4><a href="/profile/{{$author->username}}">{{!empty($author->company) ? $author->company : $author->name}}</a></h4>
        <div>{{$author->city}}</div>
        <a href="/profile/{{$author->username}}"><small>View Profile</small></a>
    </div>
    <ul class="clearfix">

        @include('items.partials._messageBtn')

    </ul>


      

</div>
