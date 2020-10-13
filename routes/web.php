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

Route::get('/', [WebController::class, 'home'])->name('home');

Route::get('services/{id}', [WebController::class, 'services'])->name('services');

Route::get('services-details/{id}', [WebController::class, 'servicesDetails'])->name('services-details');

Route::get('products', [WebController::class, 'products'])->name('products');

Route::get('product-details/{id}', [WebController::class, 'productDetails'])->name('product-details');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
