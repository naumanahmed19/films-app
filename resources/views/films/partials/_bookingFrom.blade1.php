<div class="booking">

    {{--Flash Message--}}



    @if (Auth::user() && Auth::user()->can('update', $item))

        <div class="alert alert-info">This is one of your items</div>

        <ul class="list">
            <li><a class="tc" target="_blank" href="{{ URL::route('items.show',$item->slug)}}"><i
                            class="adicon-eye"></i>View Item Details</a></li>
            <li><a class="tc6-hover" href="{{ URL::route('items.edit',$item->slug)}}"><i class="adicon-edit"></i>Edit
                    This Item</a></li>
            <li><a class="tc6-hover" href="{{ URL::route('items.edit',$item->slug)}}"><i class="adicon-edit"></i>New
                    Bookings <span class="label label-info pull-right">{!! bookingsCount($item,'new') !!}</span></a>
            </li>
            <li><a class="tc6-hover" href="{{ URL::route('items.edit',$item->slug)}}"><i class="adicon-edit"></i>In
                    progress Bookings <span
                            class="label label-warning pull-right">{!! bookingsCount($item,'pending')  !!}</span></a>
            </li>
            <li><a class="tc6-hover" href="{{ URL::route('items.edit',$item->slug)}}"><i class="adicon-edit"></i>Completed
                    Bookings <span
                            class="label label-success pull-right">{!! bookingsCount($item,'completed') !!}</span></a>
            </li>
            <li><a class="tc6-hover" href="{{ URL::route('items.edit',$item->slug)}}"><i class="adicon-edit"></i>Rejected
                    Bookings <span
                            class="label label-danger pull-right">{!! bookingsCount($item,'rejected') !!}</span></a>
            </li>
            <li><a class="tc6-hover" href="{{ URL::route('items.reviews',$item->slug) }}"><i
                            class="adicon-edit"></i>Reviews <span
                            class="label label-default pull-right">{!! bookingsCount($item,'reviews') !!}</span></a>
            </li>


        </ul>

    @else

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


            {!! Form::open(['route'=> ['bookings.store']] ) !!}

            <div class="form-group">
                {{ Form::label('date_timepicker_start', 'When you need it') }}
                {{ Form::text('from',null, array(
                    'id' => 'date_timepicker_start',
                    'class' => 'form-control datetimepicker',
                    'placeholder' => 'Pickup Date',
                    'autocomplete'=>'off',
                    'required'
                )) }}


            </div>
            <div class="form-group">
                {{ Form::label('date_timepicker_end', 'Till you need it') }}
                {{ Form::text('to',null, array(
                    'id' => 'date_timepicker_end',
                    'class' => 'form-control datetimepicker',
                    'placeholder' => 'Drop Date',
                    'autocomplete'=>'off',
                    'required'
                )) }}
            </div>
            <input type="hidden" name="item_id" value="{{$item->id}}">

            @if(Session::get('price'))



                <div class="estimatedPrice">
                    <ul class="list">

                        <li><a class="tc6-hover" href="http://2rent.app/items/dsfasdf/edit"><i class="adicon-edit"></i>Total Hours <span class="label label-info pull-right">{{Session::get('hours')}}</span></a>
                        </li>
                        <li><a class="tc6-hover" href="http://2rent.app/items/dsfasdf/edit"><i class="adicon-edit"></i>{{Session::get('rent_type')}} Rate <span class="label label-warning pull-right">{{Session::get('rent')}}  Rs</span></a>
                        </li>

                        <li><a class="tc6-hover" href="http://2rent.app/items/dsfasdf/edit"><i class="adicon-edit"></i>Discount <span class="label label-danger pull-right">{{Session::get('discount')}} %</span></a>
                        </li>


                    </ul>
                    <br>
                    <p> Total Estimated Price </p>
                    <h4 class="text-right">{{Session::get('price')}} Rs</h4>

                </div>


            @endif


            @if(Session::get('availability'))

                <button type="submit" class="btn btn-success">Booking Now</button>
            @else
                <button type="submit" name="check_availability" value="1" class="btn btn-primary">Check Availability</button>
            @endif
            {!! Form::close() !!}

        @endif





    @endif
</div>