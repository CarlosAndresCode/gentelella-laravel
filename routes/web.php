<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
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


    Route::get('users', [RegisteredUserController::class, 'index'])
        ->name('users.index');

    Route::get('users/create', [RegisteredUserController::class, 'createUser'])->name('users.create');

    Route::post('users/create', [RegisteredUserController::class, 'storeUser'])->name('users.post');
});
