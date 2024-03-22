<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashController::class, 'show']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'edit'])->name('account.edit');
    Route::patch('/account', [AccountController::class, 'update'])->name('account.update');
    Route::delete('/account', [AccountController::class, 'destroy'])->name('account.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile/create', [\App\Http\Controllers\ProfileController::class, 'create'])->name('profile.create');
});

require __DIR__ . '/auth.php';
