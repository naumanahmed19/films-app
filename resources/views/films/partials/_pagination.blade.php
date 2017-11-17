
@if($films->count() > 0 )

    {{ Html::link($films->nextPageUrl() ,'Next' , array('class' => $films->nextPageUrl() ? 'infinite-more-link hide' : 'disabled btn btn-default btn-sm hide')) }}

@endif