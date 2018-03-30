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
//     return view('welcome');
// });

Route::get('/', [
	'as' => 'home',
	'uses' => 'PageController@getIndex'
]);

Route::get('home', [
	'as' => 'home',
	'uses' => 'PageController@getIndex'
]);

Route::get('product-type/{type}', [
	'as' => 'product-type',
	'uses' => 'PageController@ProductType'
]);

Route::get('product-details/{id}', [
	'as' => 'product-details',
	'uses' => 'PageController@ProductDetails'
]);

Route::get('about', [
	'as' => 'about',
	'uses' => 'PageController@About'
]);

Route::get('contact', [
	'as' => 'contact',
	'uses' => 'PageController@Contact'
]);

Route::get('add-to-cart/{id}', [
	'as' => 'add-to-cart',
	'uses' => 'PageController@AddToCart'
]);

Route::get('del-cart/{id}', [
	'as' => 'del-cart',
	'uses' => 'PageController@DelItemCart'
]);

Route::get('order', [
	'as' => 'order',
	'uses' => 'PageController@getOrder'
]);

Route::post('order', [
	'as' => 'order',
	'uses' => 'PageController@postOrder'
]);

Route::get('login', [
	'as' => 'login',
	'uses' => 'PageController@getLogin'
]);

Route::post('login', [
	'as' => 'login',
	'uses' => 'PageController@postLogin'
]);

Route::get('signup', [
	'as' => 'signup',
	'uses' => 'PageController@getSignup'
]);

Route::post('signup', [
	'as' => 'signup',
	'uses' => 'PageController@postSignup'
]);

Route::get('logout', [
	'as' => 'logout',
	'uses' => 'PageController@Logout'
]);

Route::get('search', [
	'as' => 'search',
	'uses' => 'PageController@Search'
]);