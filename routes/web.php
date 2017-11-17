<?php




Route::get('/', [
    'as' => 'welcome',
    'uses' => 'HomeController@welcome'
]);
Route::get('/home', [
    'as' => 'home',
    'uses' => 'HomeController@welcome'
]);
Auth::routes();

Route::resource('films', 'FilmController',
    [
        'except' => ['edit', 'update','destroy'],
    ]);


Route::resource('comments', 'CommentController', [
    'only' => ['store'],
]);