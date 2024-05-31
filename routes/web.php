<?php

use Illuminate\Support\Facades\Route;

// Routing Client
Route::get('/', function () {
    return view('client.layouts.master');
});

// Routing Admin
Route::get('/!4Dm1n5', function () {
    return view('admin.layouts.master');
});
