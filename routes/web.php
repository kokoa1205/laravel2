<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');
Route::get('/', 'IndexController@poat');
Route::get('/finish', 'FinishController@index');
