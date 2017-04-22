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

// Route to contact page
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PageController@postContact'); // <<<< MUST FINISH


// Route to generated dynamic pages
Route::get('news', 'BlogController@getBlog');
Route::get('news/{slug}', ['as' => 'news/post', 'uses' => 'BlogController@getPost'])->where('slug', '[\w\d\-\_]+');


// Route to admin area
Route::get('admin', 'AdminController@getAdmin');

// Route to dynamic Post pages
Route::resource('admin/posts', 'PostController');

// Route to Categories
Route::resource('admin/categories', 'CategoryController', ['except' => ['create']]);

// Route to Tags
Route::resource('admin/tags', 'TagController', ['except' => ['create']]);

// Route to Comments
Route::post('admin/comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'admin/comments/store'] );
Route::get('admin/comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'admin/comments/edit'] );
Route::put('admin/comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'admin/comments/update'] );
Route::delete('admin/comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'admin/comments/destroy'] );
Route::get('admin/comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'admin/comments/delete'] );


Auth::routes();
