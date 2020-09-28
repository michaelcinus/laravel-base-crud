<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagamentiController@index') -> name('pagamenti.index');

Route::get('/pagamento/delete/{id}', 'PagamentiController@destroy') -> name('pagamenti.destroy');

Route::get('/pagamento/edit/{id}', 'PagamentiController@edit') -> name('pagamenti.edit');

Route::post('/pagamento/update/{id}', 'PagamentiController@update') -> name('pagamenti.update');



