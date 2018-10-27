<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
/* Routes that no need to be defined again
	* ('/login')
	* ('/register')
	* ('/logout')
*/

Route::get('/', 'ArticleController@index')->name('home');
Route::get('/dashboard', 'HomeController@profile')->name('dashboard');
Route::get('/categories', 'CategoryController@categories')->name('categories');
Route::get('/categories/{category_id}', 'CategoryController@category');
Route::get('/categories/show/{article_id}', 'ArticleController@show')->name('show');
Route::get('/categories/show/scraped/{article_id}', 'ArticleController@showScraped')->name('show scraped');

// Member and Author Stuffs
Route::post('/dashboard/library/post', 'LibraryController@createLibrary')->name('new library');
Route::get('/dashboard/library/{library_id}', 'LibraryController@getLibrary')->name('get library');
Route::get('/categories/library/{library_id}/add/{article_id}', 'LibraryController@addToLibrary')->name('article to library');
Route::get('/categories/library/{library_id}/add/scraped/{article_id}', 'LibraryController@addScrapedToLibrary')->name('scraped to library');

// Admin Stuffs
Route::group(['prefix' => 'admin'], function(){
	Route::get('/categories', 'AdminController@index');
	Route::get('/categories/{category_id}', 'AdminController@getArticles');
	Route::get('/scrape', 'ScrapedArticleController@index');
	Route::get('/scrape/{category_id}', 'ScrapedArticleController@scrape');
});


