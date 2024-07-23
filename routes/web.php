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
    return view('welcome');
});


Route::get('/', [UserController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAct'])->name('login.act');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerAct'])->name('register.act');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('google-login', [AuthController::class, 'redirectToProvider']);
Route::get('googleAuth-callback', [AuthController::class, 'handleProviderCallback']);

// Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');