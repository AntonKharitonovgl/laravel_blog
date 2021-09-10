<?php

use Illuminate\Support\Facades\Route;

Route::get('/contacts', function () {
    return view('contacts');
});


Route::get('/', 'App\Http\Controllers\ArticlesController@index');
Route::get('/about', function () {
    return view('about');
});


Route::get('/articles/tags/{tag}', '\App\Http\Controllers\TagsController@index');
Route::get('/articles', 'App\Http\Controllers\ArticlesController@index');
Route::get('/articles/create', 'App\Http\Controllers\ArticlesController@create');
Route::get('/articles/{id}', 'App\Http\Controllers\ArticlesController@show');
Route::post('/articles', 'App\Http\Controllers\ArticlesController@store');
Route::get('/articles/{id}/edit', 'App\Http\Controllers\ArticlesController@edit');
Route::patch('/articles/{id}', 'App\Http\Controllers\ArticlesController@update');
Route::delete('/articles/{id}', 'App\Http\Controllers\ArticlesController@destroy');

Route::get('/admin/feedback', 'App\Http\Controllers\FeedbacksController@index');
Route::post('/contacts', 'App\Http\Controllers\FeedbacksController@store');


