<?php
Route::get('/', function () {
    return view('inicio');
});

Route::get('/layout', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Controller tipo RestFul
Route::resource('products', 'ProdutoController');

