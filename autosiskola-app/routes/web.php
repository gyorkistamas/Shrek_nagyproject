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
    Route::delete('/users/delete/{taj}', [UserManagementController::class, 'destroy'])->name('users.delete');
    Route::get('/users/search', [UserManagementController::class, 'search'])->name('users.search');
});

use App\Http\Controllers\OraController;

Route::middleware(['auth'])->group(function () {
    Route::get('/orak', [OraController::class, 'index'])->name('orak.index');
    Route::get('/orak/create', [OraController::class, 'create'])->name('orak.create');
    Route::post('/orak', [OraController::class, 'store'])->name('orak.store');
    Route::get('/orak/{oraID}/edit', [OraController::class, 'edit'])->name('orak.edit');
    Route::put('/orak/{oraID}', [OraController::class, 'update'])->name('orak.update');
    Route::delete('/orak/{oraID}', [OraController::class, 'destroy'])->name('orak.destroy');
});

use App\Http\Controllers\VizsgaController;

Route::middleware(['auth'])->group(function () {
    Route::get('/vizsga', [VizsgaController::class, 'index'])->name('vizsga.index');
    Route::get('/vizsga/create', [VizsgaController::class, 'create'])->name('vizsga.create');
    Route::post('/vizsga', [VizsgaController::class, 'store'])->name('vizsga.store');
    Route::get('/vizsga/{vizsgaID}/edit', [VizsgaController::class, 'edit'])->name('vizsga.edit');
    Route::put('/vizsga/{vizsgaID}', [VizsgaController::class, 'update'])->name('vizsga.update');
    Route::delete('/vizsga/{vizsgaID}', [VizsgaController::class, 'destroy'])->name('vizsga.destroy');

});

