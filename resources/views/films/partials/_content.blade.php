    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12">

            @if($films->count() > 0)

                <div class="films">

                        @include('films.partials._loop',['col' => 3])

                        @include('films.partials._pagination')
                </div>

            @else

                @include('films.partials._none')

            @endif

        </div>

    </div>
