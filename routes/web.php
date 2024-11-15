<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\OperationsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SteamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.hello');
});

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => '/products', 'as' => 'products.'], function () {
        Route::get('/', [ProductsController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'steam', 'as' => 'steam.'], function () {
        Route::get('/', [SteamController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
        Route::get('/', [AccountController::class, 'index'])->name('index');
        Route::get('/deposit', [AccountController::class, 'deposit'])->name('deposit');
    });

    Route::group(['prefix' => '/transaction', 'as' => 'transaction.'], function () {
        Route::get('/create', [OperationsController::class, 'create'])->name('create');
        Route::get('/check', [OperationsController::class, 'create'])->name('check');
        Route::get('/get/list', [OperationsController::class, 'getList'])->name('getList');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
