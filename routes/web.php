<?php

use App\Http\Controllers\CarController;
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
Route::get('/layanan', 'CategoryController@index')->name('layanan');
Route::get('about', function () {
    return view('landing.pages.about');
})->name('about');
Route::get('detail/{id}', 'CarController@index')->name('detail');
Route::get('book/{id}', 'BookController@index')->name('book');
Route::post('confirm/{id}', 'BookController@book')->name('confirm');
Route::get('confirm/{id}', 'BookController@show')->name('confirmBook');


Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {

        Route::resource('/', 'DashboardController');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('car', 'CarController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('detail', 'DetailController');
        Route::resource('price', 'PriceController');
        Route::get('transaction', 'TransactionController@index')->name('transaction');
    });

Auth::routes();
