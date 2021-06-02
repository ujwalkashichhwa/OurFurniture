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

Route::get('/', function () {
    return view('guest.welcome');
});

Route::resource('/product', 'ProductController');

Route::get('/add-to-cart/{id}',[
    'uses'=>'ProductController@getAddToCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/shopping-cart',[
    'uses'=>'ProductController@getCart',
    'as' => 'product.addToCart'
]);

Route::get('/checkout',[
    'uses'=>'ProductController@getCheckOut',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout',[
    'uses'=>'ProductController@postCheckOut',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::get('/history', 'HomeController@getOrder');
Auth::routes();

Route::resource('/home', 'HomeController');

Route::group(['middleware' => ['auth','admin']], function (){
    
    Route::resource('/dashboard', 'DashboardController');
    
    Route::resource('/edituser', 'UserController');

    Route::resource('/editproduct','EditProductController');

    Route::get('/vieworder', 'DashboardController@purchasedorder');

    Route::get('/neworder', 'DashboardController@createnewproduct');
});

