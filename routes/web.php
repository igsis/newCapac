<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste', 'TesteController@index');
