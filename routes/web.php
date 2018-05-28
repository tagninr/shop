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

/**
 * Route Admin
 */
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Backend',
], function () {

    /**
     * Route Admin/Dashboard
     */
    Route::get('index', 'DashboardController@index')->name('index');

    /**
     * Route Admin/Bill
     */
    Route::group(['prefix' => 'bill'], function () {
        Route::get('index','BillController@index')->name('indexBill');
        Route::get('create','BillController@create')->name('createBill');
        Route::post('store/{id}','BillController@store')->name('storeBill');
        Route::get('edit/{id}','BillController@edit')->name('editBill');
        Route::post('update/{id}','BillController@update')->name('updateBill');
        Route::delete('delete/{id}','BillController@destroy')->name('deleteBill');
    });

    /**
     * Route Admin/BillDetail
     */
    Route::group(['prefix' => 'billdetail'], function () {
        Route::get('index','BillDetailController@index')->name('indexBillDetail');
        Route::get('create','BillDetailController@create')->name('createBillDetail');
        Route::post('store/{id}','BillDetailController@store')->name('storeBillDetail');
        Route::get('edit/{id}','BillDetailController@edit')->name('editBillDetail');
        Route::post('update/{id}','BillDetailController@update')->name('updateBillDetail');
        Route::delete('delete/{id}','BillDetailController@destroy')->name('deleteBillDetail');
    });

    /**
     * Route Admin/Brand
     */
    Route::group(['prefix' => 'brand'], function () {
        Route::get('index','BrandController@index')->name('indexBra');
        Route::get('create','BrandController@create')->name('createBra');
        Route::post('store/{id}','BrandController@store')->name('storeBra');
        Route::get('edit/{id}','BrandController@edit')->name('editBra');
        Route::post('update/{id}','BrandController@update')->name('updateBra');
        Route::delete('delete/{id}','BrandController@destroy')->name('deleteBra');
    });

    /**
     * Route Admin/Category
     */
    Route::group(['prefix' => 'category'], function () {
        Route::get('index','CategoryController@index')->name('indexCat');
        Route::get('create','CategoryController@create')->name('createCat');
        Route::post('store/{id}','CategoryController@store')->name('storeCat');
        Route::get('edit/{id}','CategoryController@edit')->name('editCat');
        Route::post('update/{id}','CategoryController@update')->name('updateCat');
        Route::delete('delete/{id}','CategoryController@destroy')->name('deleteCat');
    });

    /**
     * Route Admin/Customer
     */
    Route::group(['prefix' => 'customer'], function () {
        Route::get('index','CustomerController@index')->name('indexCus');
        Route::get('create','CustomerController@create')->name('createCus');
        Route::post('store/{id}','CustomerController@store')->name('storeCus');
        Route::get('edit/{id}','CustomerController@edit')->name('editCus');
        Route::post('update/{id}','CustomerController@update')->name('updateCus');
        Route::delete('delete/{id}','CustomerController@destroy')->name('deleteCus');
    });

    /**
     * Route Admin/Product
     */
    Route::group(['prefix' => 'product'], function () {
        Route::get('index','ProductController@index')->name('indexPro');
        Route::get('create','ProductController@create')->name('createPro');
        Route::post('store/{id}','ProductController@store')->name('storePro');
        Route::get('edit/{id}','ProductController@edit')->name('editPro');
        Route::post('update/{id}','ProductController@update')->name('updatePro');
        Route::delete('delete/{id}','ProductController@destroy')->name('deletePro');
    });

    /**
     * Route Admin/User
     */
    Route::group(['prefix' => 'user'], function () {
        Route::get('index','UserController@index')->name('indexUser');
        Route::get('create','UserController@create')->name('createUser');
        Route::post('store/{id}','UserController@store')->name('storeUser');
        Route::get('edit/{id}','UserController@edit')->name('editUser');
        Route::post('update/{id}','UserController@update')->name('updateUser');
        Route::delete('delete/{id}','UserController@destroy')->name('deleteUser');
    });

//    Route::get('index', [
//        'as' => 'index',
//        'uses' => 'DashboardController@index'
//    ]);
//
//    Route::get('product', [
//        'as' => 'product',
//        'uses' => 'ProductController@index'
//    ]);
});