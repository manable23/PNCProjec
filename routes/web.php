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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/order', 'OrderController@index')->name('order.index');
Route::get('/order/create', 'OrderController@create')->name('order.create');
Route::post('/order', 'OrderController@store')->name('order.store');
Route::get('/order/{order}', 'OrderController@show')->name('order.show');
Route::get('/order/{order}/edit', 'OrderController@edit')->name('order.edit');
Route::put('/order/{order}', 'OrderController@update')->name('order.update');
Route::delete('/order/{order}', 'OrderController@destroy')->name('order.destroy');

Route::get('/products', 'ProductsController@index')->name('products.index');
Route::get('/products/create', 'ProductsController@create')->name('products.create');
Route::post('/products', 'ProductsController@store')->name('products.store');
Route::get('/products/{products}', 'ProductsController@show')->name('products.show');
Route::get('/products/{products}/edit', 'ProductsController@edit')->name('products.edit');
Route::put('/products/{products}', 'ProductsController@update')->name('products.update');
Route::delete('/products/{products}', 'ProductsController@destroy')->name('products.destroy');

Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category', 'CategoryController@store')->name('category.store');
Route::get('/category/{category}', 'CategoryController@show')->name('category.show');
Route::get('/category/{category}/edit', 'CategoryController@edit')->name('category.edit');
Route::put('/category/{category}', 'CategoryController@update')->name('category.update');
Route::delete('/category/{category}', 'CategoryController@destroy')->name('category.destroy');

Route::get('/staff', 'StaffController@index')->name('staff.index');
Route::get('/staff/create', 'StaffController@create')->name('staff.create');
Route::post('/staff', 'StaffController@store')->name('staff.store');
Route::get('/staff/{staff}', 'StaffController@show')->name('staff.show');
Route::get('/staff/{staff}/edit', 'StaffController@edit')->name('staff.edit');
Route::put('/staff/{staff}', 'StaffController@update')->name('staff.update');
Route::delete('/staff/{staff}', 'StaffController@destroy')->name('staff.destroy');






Route::resource('/profile', 'ProfileController');