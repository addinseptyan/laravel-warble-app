<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WarbleController;
use Illuminate\Support\Facades\Route;
use App\Models\Warble;

Route::get('/', function () {
    return view('welcome', [
        "warbles" => Warble::with('user')->latest()->take(4)->get()
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('warbles', WarbleController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
