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

use App\Http\Controllers\UserRegistrationController;

Route::get('/user-registration', [UserRegistrationController::class, 'showRegistrationForm'])->name('user.registration');
Route::post('/user-registration', [UserRegistrationController::class, 'register'])->name('user.register');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sell', [App\Http\Controllers\SellController::class, 'index']);

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/products', 'ProductController@index')->name('products.index');
Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');


Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');

Route::get('/product/{id}', 'ProductController@show')->name('product.show');


Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::put('products/{id}', 'ProductController@update')->name('products.update');