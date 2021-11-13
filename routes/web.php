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

Route::get('/', 'HomeController@index')->name('home');
Route::get('about', function () {
    return view('landing.pages.about');
})->name('about');


Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {

        Route::resource('/', 'DashboardController');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('car', 'CarController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('detail', 'DetailController');
    });

Auth::routes();
