<?php

use App\Http\Controllers\editController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Auth\RegisterController;


Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::get('/edit', [editController::class, 'edit'])
    ->middleware('auth')
    ->name('edit');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/', function () {
    return redirect()->route('dashboard');
});




use App\Http\Controllers\UserManagementController;

Route::middleware('auth')->group(function () {
    Route::get('/users', [UserManagementController::class, 'index'])->name('users.index');
    Route::get('/users/edit/{taj}', [UserManagementController::class, 'edit'])->name('users.edit');
    Route::put('/users/update/{taj}', [UserManagementController::class, 'update'])->name('users.update');
});


