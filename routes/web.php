<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/blog/{slug}', 'HomeController@show');
Route::get('/{slug}', 'HomeController@page');
