<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.form');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Module User
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('users/create', [UserController::class, 'create'])->name('users.create');

    Route::post('users', [UserController::class, 'store'])->name('users.store');

    Route::get('users/{user}', [UserController::class, 'edit'])->name('users.edit');

    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');

    Route::post('users/search', [UserController::class, 'search'])->name('users.search');
});
