<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;




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

//Routing untuk auth
Route::get('/dashboards/{user_type}', 'DashboardController@index') 
->name('dashboards.index')
->where('user_type', 'admin|user');

Route::get('/dashboards', 'DashboardController@index')->name('dashboards.index');

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
Route::post('/store', 'ProductsController@store')->name('store');
Route::get('/products/{products}', 'ProductsController@show')->name('products.show');
Route::get('/edit/{id}', 'ProductsController@edit')->name('edit');
Route::put('/update/{id}', 'ProductsController@update')->name('update'); 
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

Route::get('/display', 'DisplayController@index')->name('display.index');

Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user', 'UserController@store')->name('user.store');
Route::get('/user/{user}', 'UserController@show')->name('user.show');
Route::delete('/user/{user}', 'UserController@destroy')->name('user.destroy');
Route::get('/user/{user}/edit', 'UserController@edit')->name('user.edit');
Route::put('/user/{user}', 'UserController@update')->name('user.update');

