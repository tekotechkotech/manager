<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return 'subdomain';
    // return view('welcome');
});

// Route::get('/', [UserController::class, 'index'])->name('home-finance');


// Route::get('pembayaran/dashboard', [AuthController::class, 'handleProviderCallback']);

// Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');