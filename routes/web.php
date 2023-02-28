<?php

Route::get('/', function (){
    return 'welcome';
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::get('/dashboard', function (){
   return 'dashboard';
});

