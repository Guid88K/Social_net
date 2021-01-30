<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



Route::resource('/test','TestController');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'SocialNetworkController@index')->name('community.index');
Route::resource('/community', 'SocialNetworkController')->except('index');
Route::resource('/status', 'StatusController');
Route::get('bio', function () {
    return view('pages.bio');
});

Route::get('blog', function () {
    return view('pages.blog');
});

Route::get('friends', function () {
    return view('pages.friends');
});

Route::get('messanger', function () {
    return view('pages.messanger');
});
