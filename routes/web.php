<?php

// Admin routes

Route::namespace('Admin')->group( function(){

	Route::get('admin','HomeController@index')->name('admin.home');
	

});






Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
