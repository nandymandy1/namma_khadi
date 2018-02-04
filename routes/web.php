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

use Illuminate\Http\Request;
use App\Product;

Route::get('/', function () {
    return view('pages.home');
})->name('index');

Route::get('/store', function () {
    return view('pages.store');
})->name('store');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function(){
	return view('pages.category');
});


Route::resource('/products', 'ProductController');


Route::get('/category/{id}', 'ProductController@category_product');


Route::get('/product_del/{id}', 'ProductController@destroy');








