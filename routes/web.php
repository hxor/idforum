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

Route::get('/', 'ForumController@index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'forum'], function () {
    Route::get('/', 'ForumController@index');

    Route::get('/show', function () {
        return view('pages.public.forum.show');
    })->name('forum.show');

    Route::get('/create', function () {
        return view('pages.public.forum.create');
    })->name('forum.create');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('channel', 'ChannelController');
});
