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

Route::get('cart', [WebController::class, 'cart'])->name('cart')->middleware('auth');

Route::get('delete-from-cart/{id}', [WebController::class, 'deleteFromCart'])->name('delete-from-cart');

Route::post('update-cart', [WebController::class, 'updateCart'])->name('update-cart');

Route::post('pincode', [WebController::class, 'pincodeCheck'])->name('pincode');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();

Route::get('checkout', [WebController::class, 'checkout'])->name('checkout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/paysuccess', [WebController::class, 'paysuccess'])->name('paysuccess')->middleware('auth');

Route::post('/pay_service', [WebController::class, 'payService'])->name('pay_service')->middleware('auth');

Route::get('payment-successsfull', function () {
    return view('pay_response');
})->name('payment-successsfull');

Route::get('payment-razorpay', [PaymentController::class, 'create'])->name('paywithrazorpay');
Route::post('payment', [PaymentController::class, 'payment'])->name('payment');

Route::get('account', [WebController::class, 'account'])->name('account')->middleware('auth');

Route::post('update-account', [WebController::class, 'updateAccount'])->name('update-account');

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('product-orders', [WebController::class, 'productOrders'])->name('product-orders');

Route::get('service-orders', [WebController::class, 'serviceOrders'])->name('service-orders');
