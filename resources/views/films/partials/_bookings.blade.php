

<div class="info-card">
    <div class="card-inner">
        <div class="card-icon">
            <i class="adicon-alarm"></i>
        </div>
        <ul class="card-track">
            <li>{{$booking->user->name}} booked {{$booking->created_at->diffForHumans()}}</li>
        </ul>

        <ul class="info-list">
            <li><i class="fa fa-map-marker"></i>{{$booking->from}}</li>
            <li><i class="fa fa-clock-o"></i>{{$booking->to}}</li>
        </ul>




    </div>
    <footer>
        @if (Auth::user()->id ==  $booking->user_id)

            @include('items.partials._reviewForm')

        @endif
    </footer>
</div>




                    {{--{{$booking->id}}--}}

                {{--{{$booking->from}}--}}
                {{--{{$booking->to}}--}}
                {{--{{$booking->item->title}}--}}
                {{--{{$booking->user->name}}--}}

