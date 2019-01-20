<?php

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/service', 'PagesController@service');

Route::resource('posts','PostsController');
