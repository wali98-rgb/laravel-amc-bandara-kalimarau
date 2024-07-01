<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\KejadianController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Routing Client
Route::get('/form-kejadian', [KejadianController::class, 'formKejadian'])->name('form.index');
Route::post('/form-kejadian', [KejadianController::class, 'formstore'])->name('form.store');

// Routing Admin
Route::middleware(['auth.login'])->group(function () {
    Route::get('/', function () {
        return view('client.pages.dashboard');
    });

    Route::get('/!4Dm1n5', function () {
        return view('admin.layouts.master');
    });

    // Route Kejadian
    Route::resource('kejadian', KejadianController::class);
    Route::put('/status-kejadian/{id}', [KejadianController::class, 'udpateStatus'])->name('kejadian.updateStatus');
    // Route::get('/kejadian', [KejadianController::class, 'index']);
    // Route::post('/kejadian', [KejadianController::class, 'store'])->name('kejadian.index');

    // Route Tentang Kami
    Route::get('/tentang-kami', function () {
        return view('client.pages.tentang-kami');
    });
});

// Route QR
Route::get('/qr', [KejadianController::class, 'generate'])->name('qr.page');

// Route Auth Detail
Route::prefix('!4Dm1n5')->group(function () {
    // Login Routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Register Routes
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    // Route::post('register', [RegisterController::class, 'registered']);

    // Password Reset Routes
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

    // Email Verification Routes
    Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});

// Route Auth Default
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
