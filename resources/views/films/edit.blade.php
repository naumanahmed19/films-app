@extends('layouts.app')

@section('content')
    <div class="_page_wrap">
        <div class="container">
            <div class="page">
                <header class="heading style-bg big text-center">
                    <h1>Item <strong> Settings</strong></h1>
                    <p class="text-uppercase">{{$item->title}}</p>
                </header>
                <div class="form-wrapper">
                    @if(!$item->published)
                        <div class="alert alert-danger">
                            <p>Your Item is not published</p>
                        </div>
                    @endif
                    {!! Form::model($item,['route'=> ['items.update',$item->id ], 'method' => 'PATCH','files' => true,'id'=>'itemPostForm']) !!}
                    @include('dashboard.items.partials._form')
                    <div class="form_footer">
                        <hr>
                        <div class="btn-toolbar">
                            <button type="submit" class="btn btn-success btn-md" name="published" value="1">Save &
                                Publish
                            </button>
                            @if($item->published)
                                <button type="submit" class="btn btn-warning btn-md" name="published" value="0">Un
                                    Publish
                                </button>
                            @endif
                            <a href="/items/{{$item->slug}}" target="_blank" class="btn btn-primary btn-md">Preview
                                Item</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    {!! Form::model($item,['route'=> ['items.destroy',$item->id ], 'method' => 'DELETE','files' => true]) !!}
                    <button type="submit" class="btn btn-danger btn-md">Delete Item</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
