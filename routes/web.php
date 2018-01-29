<?php

Auth::routes();

Route::name('home')->get('/', 'PostController@index');

Route::resource('post', 'PostController');
