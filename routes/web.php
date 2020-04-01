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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::Get("/postGuest","PostController@index")->name("posts");
Route::name("admin.")->prefix("admin")->namespace("Admin")->middleware('auth')->group(function(){
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::resource("posts","PostController");
});
