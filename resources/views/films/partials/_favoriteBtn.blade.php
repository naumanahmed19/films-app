@if(Auth::User())

    @inject('favorites','App\Http\Utilities\Favorite')

        @if($favorited = in_array($item->id, $favorites->collection()) )

            {!! Form::model($item,['route'=> ['favorites.destroy',$item->id ], 'method' => 'DELETE']) !!}

        @else
            {{  Form::open(['route' => 'favorites.store']) }}

            {{Form::hidden('item_id', $item->id) }}

        @endif
        <button type="submit" class="btn-fav {{ $favorited ? 'favorited' : 'not-favorited' }}">
        
                <i class="fa fa-heart"></i> {!!   $favorited ? 'Favorited ' : 'Add To Favorite' !!}
        
        </button>
        
        {{ Form::close() }}

@else

        <a href="{{ route('login') }}" class="btn-fav"> <i class="fa fa-heart"></i> Add To Favorite </a>

       

@endif
