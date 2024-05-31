<?php

use Illuminate\Support\Facades\Route;

// Routing Client
Route::get('/', function () {
    return view('client.layouts.master');
});

// Routing Admin