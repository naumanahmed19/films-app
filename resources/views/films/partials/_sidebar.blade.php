@inject('renter','App\Http\Utilities\Author')
@php
    $author = $renter->user($item->user_id);
@endphp
<aside class="col-xs-12 col-sm-5 col-md-4">
    @include('items.partials._favoriteBtn')
    <div class="sidebar">
        <div class="inner">
            <div class="pricing-tables clearfix">
                @include('items.partials._bookingFrom')
            </div>
            <div class="widget">
                @include('items.partials._authorWidget')
                @include('items.partials._collapseWidget')
            </div>
        </div>
    </div>
</aside>
