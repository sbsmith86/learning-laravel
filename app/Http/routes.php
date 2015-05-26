<?php
Route::get('/', 'WelcomeController@index');
Route::get('about','PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::get('articles', 'ArticlesController@index');
Route::get('articles/{id}', 'ArticlesController@show');
