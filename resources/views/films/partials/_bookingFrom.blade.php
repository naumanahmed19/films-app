

    {{--Flash Message--}}

    @if (Auth::user() && Auth::user()->can('update', $item))
        <div class="widget booking">
        <div class="alert alert-info">This is one of your items</div>

        <ul class="list">
            <li><a class="tc" target="_blank" href="{{ URL::route('items.show',$item->slug)}}"><i
                            class="adicon-eye"></i>View Item Details</a></li>
            <li><a class="tc6-hover" href="{{ URL::route('items.edit',$item->slug)}}"><i class="adicon-edit"></i>Edit
                    This Item</a></li>
            <li><a class="tc6-hover" href="{{ URL::route('items.bookings',$item->slug)}}"><i class="adicon-edit"></i>
                    Bookings <span class="label label-info pull-right">{!! bookingsCount($item,'all') !!}</span></a>
            </li>
           
            <li><a class="tc6-hover" href="{{ URL::route('items.reviews',$item->slug) }}"><i
                            class="adicon-edit"></i>Reviews <span
                            class="label label-default pull-right">{!! bookingsCount($item,'reviews') !!}</span></a>
            </li>


        </ul>

        </div>

    @else

        @if($item->bookAble)
            <div class="widget booking">

                @if(Session::has('bookingSuccess'))
                    <div class="alert alert-success">

                        {{ Session::get('bookingSuccess') }}
                    </div>

                @else


            @if(Session::get('availability'))
                <div class="alert alert-success">
                    Item is available please book now
                </div>

            @endif

     
                <booking-form 
                    route="{{route('bookings.store')}}" 
                    bookable="{{$item->bookAble}}"
                    {{--category="{{!empty($item->category()) ? $item->parentCategory()->slug : ''}}"--}}
                    address="{{!empty(Auth::user()->address) ? Auth::user()->address : ''}}"
                    item="{{$item->id}}"
                    rent_type="per {{$item->rent_type}}"
             
                    rent="{{$item->rent}}">
                </booking-form>

                @endif

            </div>
        @else
            <div class="alert alert-info">
                <strong>Why Online Booking Not Available?</strong> <br><br>
                Sometime item or services requires extra information so kindly call renter for price quotation.

            </div>
        @endif

    @endif
