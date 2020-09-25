<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'OspiteController@index') -> name('index');
Route::get('/ospite/{id}', 'OspiteController@show') -> name('ospite-show');

Route::get('/create/ospiti', 'OspiteController@create') -> name('ospite-create');
Route::get('/create/ospiti', 'OspiteController@store') -> name('ospite-create');

