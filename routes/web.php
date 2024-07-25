<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::group(['domain' => 'master-finance.localhost'], function () {
//     // dd('sini');
//     // Route::get('/', function () {
//     //     return 'subdomain';
//     //     // return view('welcome');
//     // });

//     // dd(Auth::user()->name);
//     Route::get('/', [UserController::class, 'index'])->name('home-finance');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    // dd(Auth::user()->name);
    return redirect()->route('home');
});


// Route::get('/', [UserController::class, 'index'])->name('home')->middleware('auth');

Route::get('/', [AuthController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginAct'])->name('login.act')->middleware('guest');

Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'registerAct'])->name('register.act')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('google-login', [AuthController::class, 'redirectToProvider']);
Route::get('googleAuth-callback', [AuthController::class, 'handleProviderCallback']);

// 


// Route::domain('master-finance.' . parse_url(env('APP_URL'), PHP_URL_HOST))
// ->group(base_path('routes/web-finance.php'))->middleware('auth');



// Route::get('pembayaran/dashboard', [AuthController::class, 'handleProviderCallback']);

// Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');