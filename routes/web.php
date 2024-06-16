<?php

use App\Http\Controllers\KejadianController;
use Illuminate\Support\Facades\Route;

// Routing Client
Route::get('/', function () {
    return view('client.pages.dashboard');
});

// Route::get('/form-kejadian', function () {
//     return view('client.pages.form-kejadian');
// });

Route::get('/form-kejadian', [KejadianController::class, 'formKejadian'])->name('form.index');
Route::post('/form-kejadian', [KejadianController::class, 'formstore'])->name('form.store');

// Routing Admin
Route::get('/!4Dm1n5', function () {
    return view('admin.layouts.master');
});

// Route Kejadian
Route::resource('kejadian', KejadianController::class);
// Route::get('/kejadian', [KejadianController::class, 'index']);
// Route::post('/kejadian', [KejadianController::class, 'store'])->name('kejadian.index');
