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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'UserController\UserController@home')->name('home');

Route::get('/login', 'AuthController\LoginController@index');
Route::get('/register', 'AuthController\RegisterController@index');

Route::post('/login', 'AuthController\LoginController@doLogin');
Route::get('/logout', 'AuthController\LoginController@doLogout');

Route::resource('item', 'UserController\PostController');
Route::group(['prefix'=>'/user/post','middleware'=>['web','auth']], function(){
    // Route::resource('item', 'UserController\PostController');
});

Route::group(['prefix'=>'/admin', 'middleware'=>['web','auth','admin']], function(){
    Route::get('/log', 'Admin\AdminController@log');
    Route::resource('post', 'PostsController\PostController');
    Route::resource('user', 'UserController\UserController');
});