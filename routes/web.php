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

Route::get('/', 'PostController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');

Route::get('/public', 'PageController@publicSection')->name('public');


// Route::get('/private', 'PageController@privateSection')->name('private')->middleware('auth');

Route::get('/private', 'PageController@privateSection')->name('private');

Route::resource('post','PostController');

