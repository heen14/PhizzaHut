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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', 'HomeController@index');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'PizzaController@showPizza');
Route::post('/buypizza', 'PizzaController@buyPizza');
Route::get('/viewuser', 'UserController@showUser');
Route::get('/viewcart', 'CartController@showCart');
Route::get('/viewusertransaction', 'UserController@showTrans');
Route::get('/addpizza', 'PizzaController@index');
Route::post('/addpizza', 'PizzaController@insert');
Route::get('/pizzadetail/{id}', 'PizzaController@showDetail');
Route::get('/pizzadetail/{id}', 'PizzaController@showDetail');
Route::get('/pizzadelete/{id}', 'PizzaController@toDelete');
Route::get('/pizzaupdate/{id}', 'PizzaController@toUpdate');
Route::get('/viewchk', 'CheckoutController@viewchk');
Route::post('/pizzaupdate', 'PizzaController@updateDetail');
Route::post('/pizzaremove','PizzaController@deleteDetail');
Route::post('/updatecart','CartController@updateCart');
Route::post('/deletecart','CartController@deleteCart');
Route::post('/checkout','CheckoutController@checkout');


