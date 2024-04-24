<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

//Route::get('/', function () {
//    return view('index');
//});

Route::resource('/', indexController::class);


Route::get('/account', function () {
    return view('account');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/product_detail', function () {
    return view('product_detail');
});

Route::get('/product_list', function () {
    return view('product_list');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/shopping_cart', function () {
    return view('shopping_cart');
});


