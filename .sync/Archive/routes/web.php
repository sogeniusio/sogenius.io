<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route to static pages
Route::get('/', 'PagesController@getHome');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');

// Route to generated dynamic pages
Route::get('news', 'BlogController@getBlog');

// Route to admin area
Route::get('admin', 'AdminController@getAdmin');

// Route to dynamic Post pages
Route::resource('posts', 'PostController');
