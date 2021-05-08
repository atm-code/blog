<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/blog/{slug}', 'HomeController@show');
Route::get('/cat/{slug}', 'HomeController@cat');
Route::get('/{slug}', 'HomeController@page');
Route::redirect('/register', '/', 301);
