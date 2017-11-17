@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Film</div>
                    <div class="panel-body">
                        {!! Form::open(['route'=> ['films.store'],
                        'id'=>'filmPostForm',
                        'enctype'=>'multipart/form-data'] ) !!}

                        @include('films.partials._form')

                        <button type="submit" class="btn btn-green btn-md">Save</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection