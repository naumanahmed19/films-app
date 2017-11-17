<div class="container">

    <div class="filterd">

        <ul class="filter-tab">
            <li>
                ({{$itemsCount}}) Items Found
            </li>
            <li>
                <i class="fa fa-sliders"></i>
            </li>
        </ul>

        <div class="wrap">


            @include('items.partials._filter')

                    @if (!empty($categoryName) && !$categoryName->isLeaf())

                        <div class="child-cats">



                                {!! children($categoryName) !!}


                        </div>

                    @endif


        </div>

    </div>

</div>