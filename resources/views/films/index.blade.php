@extends('layouts.app')

@section('content')
    <div class="archive-search">
        
        <div id="searchResults">

         <div class="container">

             @if(!empty($message))
                <div class="alert alert-info">
                    {{$message}}
                </div>
             @endif
           
            @include('films.partials._content')

        </div>

        </div>
    </div>


@endsection
