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

Route::get('/login', 'AuthController@index')->name('login')->middleware('guest');
Route::get('/login/gsuit', 'AuthController@redirectToProvider');
Route::get('/login/callback', 'AuthController@handleProviderCallback');
Route::get('/logout', 'AuthController@logout')->middleware('auth');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('{path?}', 'RenderWebView')->where('path', '[a-zA-Z0-9-/]+')->middleware('auth');
