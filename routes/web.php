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

Route::get('/', 'FrontController@index');
Route::get('/posts/{post}', 'FrontController@show')->name('posts.show');

Auth::routes();

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('/', 'PostsController@index')->name('index');
        Route::get('/create', 'PostsController@create')->name('create');
        Route::post('/store', 'PostsController@store')->name('store');
        Route::get('/{post}/edit', 'PostsController@edit')->name('edit');
        Route::patch('/{post}', 'PostsController@update')->name('update');
        Route::delete('/{post}', 'PostsController@destroy')->name('delete');
    });
});
