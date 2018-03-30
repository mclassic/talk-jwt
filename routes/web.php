<?php

Route::get('/', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
