<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\StudentController;
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

Route::get('/profile/create', [\App\Http\Controllers\ProfileController::class, 'create'])->middleware('auth')->name('profile.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile/student/create', [StudentController::class, 'create'])->name('profile.student.create');
    Route::post('/profile/student/create', [StudentController::class, 'store'])->name('profile.student.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile/client/create', [ClientController::class, 'create'])->name('profile.client.create');
    Route::post('/profile/client/create', [ClientController::class, 'store'])->name('profile.client.store');
    Route::get('/profile/client/{client:id}', [ClientController::class, 'show'])->name('profile.client.show');
    Route::get('/profile/client/{client:id}/edit', [ClientController::class, 'edit'])->name('profile.client.edit');
    Route::post('/profile/client/{client:id}/edit', [ClientController::class, 'update'])->name('profile.client.update');
});

require __DIR__ . '/auth.php';
