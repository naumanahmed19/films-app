  @if($film->media()->count() > 0)
      @foreach($film->media() as $media)
          <div class="item-lg-thumb imgAsBg">
              <img src="{{$media->getUrl()}}" alt="dummy">
          </div>
      @endforeach

  @endif