<div class="quick-info">
    <ul class="clearfix">
        @if($item->attr_brand)
        <li>
            <div class="inner clearfix">
                <span class="label">Brand Name</span>
                <span class="desc">{{$item->attr_brand}}</span>
            </div>
        </li>
        @endif 
        @if($item->attr_model)
        <li>
            <div class="inner clearfix">
                <span class="label">item Model</span>
                <span class="desc">{{$item->attr_model}}</span>
            </div>
        </li>
        @endif 
        @if($item->attr_condition)
        <li>
            <div class="inner clearfix">
                <span class="label">Condition</span>
                <span class="desc">{{$item->attr_condition}}</span>
            </div>
        </li>
        @endif 
        @if($item->attr_color)
        <li>
            <div class="inner clearfix">
                <span class="label">Color</span>
                <span class="desc">{{$item->attr_color}}</span>
            </div>
        </li>
        @endif
    </ul>
</div>