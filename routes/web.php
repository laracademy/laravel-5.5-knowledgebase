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

Route::get('/')->uses('HomeController@index')->name('home');
Route::get('/category/view/{category}')->uses('CategoryController@view')->name('category.view');
Route::get('/article/view/{article}')->uses('ArticleController@view')->name('article.view');


// Authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'middleware' => 'auth'], function() {
    Route::get('')->uses('DashboardController@index')->name('dashboard');

    Route::group(['prefix' => 'Category'], function() {
        Route::get('create')->uses('CategoryController@create')->name('dashboard.category.create');
        Route::post('store')->uses('CategoryController@store')->name('dashboard.category.store');

        Route::get('edit/{category}')->uses('CategoryController@edit')->name('dashboard.category.edit');
        Route::post('update/{category}')->uses('CategoryController@update')->name('dashboard.category.update');

        Route::get('destroy/{category}')->uses('CategoryController@destroy')->name('dashboard.category.destroy');

        Route::get('attach/{category}')->uses('CategoryController@attach')->name('dashboard.category.attach');
        Route::post('attachArticle/{category}')->uses('CategoryController@attachArticle')->name('dashboard.category.article.save');
    });

    Route::group(['prefix' => 'articles'], function() {
        Route::get('/create/{category}')->uses('ArticleController@create')->name('dashboard.articles.create');
        Route::post('/store/{category}')->uses('ArticleController@store')->name('dashboard.articles.store');

        Route::get('/edit/{article}/{category}')->uses('ArticleController@edit')->name('dashboard.articles.edit');
        Route::post('/update/{article}')->uses('ArticleController@update')->name('dashboard.articles.update');

        Route::get('destroy/{article}/{category}')->uses('ArticleController@destroy')->name('dashboard.articles.destroy');

        Route::get('/{category}')->uses('ArticleController@index')->name('dashboard.articles.index');
    });
});