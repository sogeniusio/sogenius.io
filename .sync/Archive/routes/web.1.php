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
Route::post('contact', 'PagesController@postContact'); // <<<< MUST FINISH


// Route to generated dynamic pages
Route::get('news', 'NewsController@getNews');
Route::get('news/{slug}', ['as' => 'news/post', 'uses' => 'NewsController@getPost'])->where('slug', '[\w\d\-\_]+');


// Route to admin area
Route::get('admin', 'AdminController@getAdmin');

// Route to dynamic Post pages
Route::resource('posts', 'PostController');

// Route to Categories
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

// Route to Tags
Route::resource('tags', 'TagController', ['except' => ['create']]);

// Route to Comments
Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store'] );
Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit'] );
Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update'] );
Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy'] );
Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete'] );


Auth::routes();
