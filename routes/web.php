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
//     return view('index');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'LandingPageController');
// Route::get('/blog/{slug}','DetailBlogController@index')->name('detail');
Route::get('/blog' , 'BlogController@index')->name('blog.index');

Route::get('/blog/{slug}','DetailBlogController@index')->name('detail');

require('admin.php');
// Admin
Route::resource('/message', 'MessageController');               

