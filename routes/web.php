<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', 'HomeController@index') ->name('home.index');

Route::get('/shop', 'HomeController@shop') ->name('home.shop');

Route::get('/product/{id}', 'HomeController@category') ->name('category');

Route::get('/chi-tiet-sp/{id}', 'HomeController@product_detail') ->name('product_detail');


Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
    Route::get('/', 'AdminController@dashboard') ->name('admin.dashboard');
    Route::get('/file', 'AdminController@file') ->name('admin.file');

    Route::resources([
        'category' => 'CategoryController',
        'product' => 'ProductController',
        'banner' => 'BannerController',
        'account' => 'AccountController',
        'order' => 'OrderController'
    ]);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/customer/login', 'CustomerController@login') ->name('customer.login');
Route::post('/customer/login', 'CustomerController@post_login') ->name('customer.login');
Route::get('/customer/register', 'CustomerController@register') ->name('customer.register');
Route::post('/customer/register', 'CustomerController@post_register') ->name('customer.register');

Route::group(['prefix' => 'customer', 'middleware' => 'cus'],function(){

    Route::get('logout', 'CustomerController@logout') ->name('customer.logout');
    Route::get('profile', 'CustomerController@profile') ->name('customer.profile');
    Route::get('order', 'CustomerController@order') ->name('customer.order');
    Route::get('change_password', 'CustomerController@change_password') ->name('customer.change_password');

});

Route::group(['prefix' => 'cart'], function(){
    Route::get('view','CartController@view')->name('cart.view');
    Route::get('add/{id}','CartController@add')->name('cart.add');
    Route::get('remove/{id}','CartController@remove')->name('cart.remove');
    Route::get('update/{id}','CartController@update')->name('cart.update');
    Route::get('clear','CartController@clear')->name('cart.clear');
});

Route::group(['prefix' => 'checkout'], function(){

    Route::get('/','CheckoutController@form')->name('checkout');

    Route::post('/','CheckoutController@submit_form')->name('checkout');
    
    Route::get('/checkout-success','CheckoutController@success')->name('checkout.success');
    
});
