<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', 'PostController@index');
Route::resource('blog', 'PostController');

Route::get('/published', 'PublishedController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')
->namespace('Admin')
->name('admin.')
->middleware('auth')
->group(function() {
    Route::resource('users', 'UserController');
});
