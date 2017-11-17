@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-7">
                <header class="entry-header page-header">


                    <h1 class="entry-title ">{{$film->title}}</h1>

                    <div class="entry-meta">
                        <i class="fa fa-map-marker"></i> Country - <a href="#">{{$film->country}}</a>
                        <i class="fa fa-bookmark"></i>ID: {{$film->id}}
                    </div>
                </header>

                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">About this Film</div>
                    <div class="panel-body">
                        @if($film->content)
                        {!! $film->content !!}
                        @endif
                    </div>

                    <!-- List group -->
                    <ul class="list-group">
                        <li class="list-group-item">Genre
                            <span class="pull-right">
                                @foreach($film->categories as $genre)
                                    {{$genre->name}}-
                                @endforeach

                            </span></li>
                       
                        <li class="list-group-item">Country  <span class="pull-right">  {{$film->country}}</span></li>
                        <li class="list-group-item">Ticket Price  <span class="pull-right badge">  $ {{$film->ticketPrice}}</span></li>
                        <li class="list-group-item">Release Date  <span class="pull-right">  {{$film->releaseDate}}</span></li>
                    </ul>
                </div>
                @include('films.partials._comments')
            </div>
            <div class="col-xs-12 col-md-5">
                @if(!empty($film->media()->first()))
                    <img src="{{$film->media()->first()->getUrl('thumb')}}?w=300&h=300&fit=crop"
                         alt="">
                @endif
            </div>

        </div>
    </div>
@endsection
