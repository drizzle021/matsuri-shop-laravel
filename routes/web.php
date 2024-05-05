<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\product_listController;
use App\Http\Controllers\product_detailController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\shopping_cartController;

// Breeze
use App\Http\Controllers\ProfileController;


// INDEX
Route::resource('/', indexController::class);


////////////////////////////////////////////////////////////////////////////////////////////////
// REGISTER

Route::post('/register/registerUser', [registerController::class, 'registerUser'])->name('registerUser');
Route::get('/register', [registerController::class, 'index'])->name('register');


// LOGIN

Route::post('/loginUser/loginUser', [loginController::class, 'loginUser'])->name('loginUser');
Route::get('/login', [loginController::class, 'index'])->name('loginUser');


// ACCOUNT
Route::get('/account', function () {
    return view('account');
});

Route::get('/accountUser', [accountController::class, 'accountUser'])->name('accountUser');
Route::post('/accountUser', [accountController::class, 'accountUser'])->name('accountUser');

////////////////////////////////////////////////////////////////////////////////////////////////
// CHECKOUT

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/checkoutUser', [checkoutController::class, 'checkoutUser'])->name('checkoutUser');
Route::post('/checkoutUser', [checkoutController::class, 'checkoutUser'])->name('checkoutUser');


// SHOPPING CART

Route::get('/shopping_cart', function () {
    return view('shopping_cart');
});

Route::get('/shopping_cartUser', [shopping_cartController::class, 'shopping_cartUser'])->name('shopping_cartUser');
Route::post('/shopping_cartUser', [shopping_cartController::class, 'shopping_cartUser'])->name('shopping_cartUser');


////////////////////////////////////////////////////////////////////////////////////////////////
// PRODUCT DETAIL

Route::get('/product/{product_id:uuid}', [product_detailController::class, 'detail'])->name('productDetail');



// PRODUCT LIST

Route::get('/product_list/{page}{request?}', [product_listController::class, 'index'])->name('productList');

// SEARCH PRODUCT LIST
Route::get('/product_list/{page}{search?}', [product_listController::class, 'searchProduct'])->name('searchProduct');

// FILTER PRODUCT LIST
Route::get('/product_list/
{page}
{filter-range-price-min?}
{filter-range-price-max?}
{product-list-order-by?}
{category?}
{series?}', [product_listController::class, 'filterProduct'])->name('filterProduct');

//filter-range-price-min=0 & filter-range-price-max=5 & product-list-order-by=pri_hi_lo
// & category=Manga & category=Box+Set
// & series=Orange & series=Erased


// ADD PRODUCT
Route::get('/product_list/addProduct', [product_listController::class, 'addProduct'])->name('addProduct');
Route::post('/product_list/addProduct', [product_listController::class, 'addProduct'])->name('addProduct');

// ADD CATEGORY
Route::get('/product_list/addCategory', [product_listController::class, 'addCategory'])->name('addCategory');
Route::post('/product_list/addCategory', [product_listController::class, 'addCategory'])->name('addCategory');

// ADD SERIES
Route::get('/product_list/addSeries', [product_listController::class, 'addSeries'])->name('addSeries');
Route::post('/product_list/addSeries', [product_listController::class, 'addSeries'])->name('addSeries');

// EDIT PRODUCT / DELETE
//Route::get('/product_list/{page}/editProduct{product_id?}{category-select?}{series-select?}{action?}', [product_listController::class, 'editProduct'])->name('editProduct');
//Route::post('/product_list/{page}/editProduct{product_id?}{category-select?}{series-select?}{action?}', [product_listController::class, 'editProduct'])->name('editProduct');

Route::get('/product_list/editProduct', [product_listController::class, 'editProduct'])->name('editProduct');
Route::post('/product_list/editProduct', [product_listController::class, 'editProduct'])->name('editProduct');



///////////////////////////////////////


Route::get('/dashboard', function () {
    return view('account');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
