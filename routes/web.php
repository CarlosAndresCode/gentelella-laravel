<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
