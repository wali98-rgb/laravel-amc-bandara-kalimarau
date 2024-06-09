<?php

use App\Http\Controllers\KejadianController;
use Illuminate\Support\Facades\Route;

// Routing Client
Route::get('/', function () {
    return view('client.pages.dashboard');
});

// Route Kejadian
Route::resource('kejadian', KejadianController::class);

// Routing Admin
Route::get('/!4Dm1n5', function () {
    return view('admin.layouts.master');
});
