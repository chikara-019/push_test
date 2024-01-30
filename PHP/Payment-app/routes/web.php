<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;//追加

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myCart', [StockController::class, 'myCart'])->name('stock.myCart');


Route::get('/subscription', [StripeController::class, 'subscription'])->name('stripe.subscription');
Route::post('/subscription/afterpay', [StripeController::class, 'afterpay'])->name('stripe.afterpay');