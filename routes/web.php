<?php

use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'home'])->name('dashboard');

Route::get('service', [WebController::class, 'service'])->name('service');

Route::get('services/{id}', [WebController::class, 'services'])->name('services');

Route::get('services-details/{id}', [WebController::class, 'servicesDetails'])->name('services-details');

Route::get('products', [WebController::class, 'products'])->name('products');

Route::get('products2/{category}', [WebController::class, 'products2'])->name('products2');

Route::get('product-details/{id}', [WebController::class, 'productDetails'])->name('product-details');

Route::post('add-to-cart', [WebController::class, 'addToCart'])->name('add-to-cart');

Route::post('check-pincode', [WebController::class, 'checkPincode'])->name('check-pincode');

Route::get('cart', [WebController::class, 'cart'])->name('cart');

Route::get('delete-from-cart/{id}', [WebController::class, 'deleteFromCart'])->name('delete-from-cart');

Route::post('update-cart', [WebController::class, 'updateCart'])->name('update-cart');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('payment-razorpay', 'PaymentController@create')->name('paywithrazorpay');
Route::post('payment', 'PaymentController@payment')->name('payment');
