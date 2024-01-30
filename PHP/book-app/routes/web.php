<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomebudgetController;

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

// Route::get('/', function () {
//     return view('homebudget.index');
// });

Route::get('/', [HomebudgetController::class, 'index'])->name('index');

Route::post('/post', [HomebudgetController::class, 'store'])->name('store');