<?php
Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Controller tipo RestFul
Route::resource('product', 'ProdutoController');
