@foreach($films->chunk(4) as $filmChunk)
    <div class="row">
        @foreach($filmChunk as $film)
            <div class="col-sm-6 col-md-{{!empty($col) ? $col : 4}}">
                <div class="thumbnail">
                        <a href="/items/{{$film->slug}}" class="">
                                @if(!empty($film->media()->first()))
                                    <img src="{{$film->media()->first()->getUrl('thumb')}}?w=300&h=300&fit=crop"
                                         alt="">
                                @endif
                        </a>
                    <div class="caption">
                        <h3><a href="/films/{{$film->slug}}">{{$film->title}}</a></h3>
                    </div>
                    <p><a href="/films/{{$film->slug}}" class="btn btn-primary" role="button">View</a>
                </div>
    </div>
        @endforeach
    </div>
@endforeach