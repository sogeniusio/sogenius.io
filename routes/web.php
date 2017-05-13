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
/**
 * Bug test
 */
Route::get('/bugs', function() {
      Bugsnag::notifyError('ErrorType', 'Test Error');
});

# ---------------------------------------------------------------------
# Frontend pages
# ---------------------------------------------------------------------
Route::get('/', 'PagesController@getHome');

Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');

Route::get('instagram', 'PagesController@instagramFeed');

Route::get('news', 'NewsController@getNews');
Route::get('news/{slug}', ['as' => 'news.post', 'uses' => 'NewsController@getPost'])->where('slug', '[\w\d\-\_]+');

Route::get('notification', 'UserController@notification');

Route::get('privacy', function() {
	return View::make('pages.privacy');
});

Route::get('quote', 'PagesController@getQuote');
Route::post('quote', 'PagesController@postQuote');

Route::get('review', 'ReviewController@getReview')->middleware('checklink');
Route::post('review', 'ReviewController@postReview');

Route::get('terms', function() {
	return View::make('pages.terms');
});

Route::get('works', 'WorksController@getWorks');
Route::get('works/{slug}', ['as' => 'works.project', 'uses' => 'WorksController@getProject'])->where('slug', '[\w\d\-\_]+');

# ---------------------------------------------------------------------
# Backend pages
# ---------------------------------------------------------------------

Auth::routes();

Route::get('admin', 'AdminController@getAdmin');

Route::get('admin/profile', 'AdminController@getProfile');
Route::post('admin/profile', 'AdminController@updateAvatar');

Route::resource('admin/settings', 'AdminSettingsController');
Route::resource('admin/testimonies', 'TestimonyController', ['except' => ['create']]);

Route::resource('admin/posts', 'PostController');
Route::resource('admin/categories', 'CategoryController', ['except' => ['create', 'destroy']]);
Route::delete('categories', ['as'=>'categories.destroy', 'uses'=>'CategoryController@destroy']);
Route::resource('admin/tags', 'TagController', ['except' => ['create']]);

Route::resource('admin/projects', 'ProjectController');
Route::resource('admin/types', 'TypeController', ['except' => ['create']]);
Route::resource('admin/identities', 'IdentityController', ['except' => ['create']]);

Route::post('admin/quotes/{quote_id}', ['uses' => 'QuoteController@store', 'as' => 'quote.store']);
Route::get('admin/quotes/{id}/edit', ['uses' => 'QuoteController@edit', 'as' => 'quote.edit']);
Route::put('admin/quotes/{id}', ['uses' => 'QuoteController@update', 'as' => 'quote.update']);
Route::delete('admin/quotes/{id}', ['uses' => 'QuoteController@destroy', 'as' => 'quote.destroy']);
Route::get('admin/quotes/{id}/delete', ['uses' => 'QuoteController@delete', 'as' => 'quote.delete']);

# ---------------------------------------------------------------------
# Utility pages
# ---------------------------------------------------------------------

Route::get('/stats', 'StatsController@index');

