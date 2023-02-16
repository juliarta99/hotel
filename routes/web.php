<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
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

Route::get('/', [RouteController::class, 'index'])->name('home');
Route::get('/destination', [RouteController::class, 'destination'])->name('destination');
Route::get('/gallery', [RouteController::class, 'gallery'])->name('gallery');
Route::get('/spa', [RouteController::class, 'spa'])->name('spa');

Route::middleware(['guest'])->group(function () {
    // register
    Route::get('/register', [LoginController::class, 'create'])->name('register');
    Route::post('/register', [LoginController::class, 'store'])->name('register');
    // login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
});
// logout
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// verifikasi email
Route::get('/email/verify', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('auth', 'signed')->name('verification.verify');
Route::post('/email/resend-verify', [VerificationController::class, 'resend'])->middleware('auth', 'throttle:6,1')->name('verification.send');

// forgot pass (otp)
Route::get('/email/forgot-pass', [VerificationController::class, 'typeEmail'])->name('forgot.email');
Route::post('/email/forgot-pass', [VerificationController::class, 'createOtp'])->name('forgot.email');
Route::get('/otp/forgot-pass/{verify_tokens:slug}', [VerificationController::class, 'noticeOtp'])->name('forgot.notice');
Route::post('/otp/forgot-pass/{verify_tokens:slug}', [VerificationController::class, 'verifyOtp'])->name('forgot.verify');
// forgot pass
Route::get('/forgot-pass/{verify_tokens:slug}', [UserController::class, 'forgot'])->name('forgot');
Route::put('/forgot-pass/{verify_tokens:slug}', [UserController::class, 'updatePass'])->name('forgot');