
<div class="accordion-toggle">
    <div class="accordion">
        <header>
            <a href="#">
                Renter Contact Details
            </a>
        </header>
        <div class="accordion-content">
            @if($author->phone)
                <i class="fa fa-phone"></i>
                <small>Phone Number :</small>
                <p>{{$author->phone}}</p>
            @endif
            @if($author->mobile)
                <hr>
                <i class="fa fa-mobile"></i>
                <small>Mobile Number:</small>
                <p> {{$author->mobile}}</p>
            @endif
            @if($author->address)
                <hr>
                <i class="fa fa-map-marker"></i>
                <small>Address:</small>
                <p>{{$author->address}}</p>
            @endif
        </div>
    </div>

    @if($author->terms)

        <div class="accordion">
            <header>
                <a href="#">Renter Terms</a>
            </header>

                <div class="accordion-content">

                    <p>{{$author->terms}}</p>

                </div>
        </div>

    @endif

    {{--<div class="accordion">--}}
        {{--<header>--}}
            {{--<a href="#">--}}

                {{--Safety Information--}}
            {{--</a>--}}
        {{--</header>--}}
        {{--<div class="accordion-content">--}}
            {{--<p>Its is recommend to c</p>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>