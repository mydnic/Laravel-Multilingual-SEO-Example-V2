<?php

Auth::routes();

Route::name('home')->get('/', 'PostController@index');

Route::resource('posts', 'PostController');

Route::name('about')->get(trans('routes.about'), 'PageController@getAboutPage');

Route::name('locale.switch')->get('locale/{locale}', 'LocaleController@switch');
