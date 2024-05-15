<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Admin routes //
Route::prefix('admin')->group(function () {

    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

    Route::resource('usuarios', UserController::class);

})->middleware(['auth']);

require __DIR__.'/auth.php';
