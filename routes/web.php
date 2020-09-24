<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'OspiteController@index') -> name('index');
