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

Route::get('/', [
	'as' => 'home',
	'uses' => 'PageController@getIndex'
]);

Route::get('about', [
    'as' => 'about',
    'uses' => 'PageController@About'
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'PageController@Contact'
]);

Route::get('product-type/{type}', [
	'as' => 'product-type',
	'uses' => 'PageController@ProductType'
]);

Route::get('product-details/{id}', [
	'as' => 'product-details',
	'uses' => 'PageController@ProductDetails'
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

//Route Admin
Route::group([
//    'as' => 'backend.',
    'prefix' => 'admin',
    'namespace' => 'Backend',
], function () {

    Route::get('index', 'DashboardController@index')->name('index');
    Route::get('bill', 'BillController@index')->name('bill');
    Route::get('billdetail', 'BillDetailController@index')->name('billdetail');
    Route::get('brand', 'BrandController@index')->name('brand');
    Route::get('category', 'CategoryController@index')->name('category');
    Route::get('customer', 'CustomerController@index')->name('customer');
    Route::get('user', 'UserController@index')->name('user');


    Route::get('product', 'ProductController@index')->name('product');
    Route::get('create-product','Product@create')->name('createProduct');
    Route::post('store-product/{id}','ProductController@store')->name('storeProduct');
    Route::get('edit-product/{id}','ProductController@edit')->name('editProduct');
    Route::post('update-product/{id}','ProductController@update')->name('updateProduct');
    Route::delete('delete-product/{id}','ProductController@destroy')->name('deleteProduct');


//    Route::group([
//        'prefix' => 'bill'
//    ], function () {
//        Route::get('index', 'BillController@index')->name('billindex');
//    });
//
//    Route::group([
//        'prefix' => 'brand'
//    ], function () {
//        Route::get('index', 'BrandController@index')->name('brandindex');
//    });
//
//    Route::group([
//        'prefix' => 'category'
//    ], function () {
//        Route::get('index', 'CategoryController@index')->name('catindex');
//    });
//
//    Route::group([
//        'prefix' => 'product'
//    ], function () {
//        Route::get('index', 'ProductController@index')->name('proindex');
//    });
});

//Route::get('admin', [
//    'as' => 'index',
//    'uses' => 'Backend\DashboardController@index'
//]);
//
//Route::get('admin/product', [
//    'as' => 'product',
//    'uses' => 'Backend\ProductController@product'
//]);
//
//Route::get('category', [
//    'as' => 'category',
//    'uses' => 'Backend\CategoryController@category'
//]);