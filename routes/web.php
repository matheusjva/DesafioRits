<?php

Route::get('/', function(){
    return view('index');
});
Route::resource('candidatos', 'CandidatosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
