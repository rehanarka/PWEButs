<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('loginPost');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/produk', function () {
    if (!session()->has('username')) {
        return redirect()->route('login');
}
    return view('produk');
})->name('produk');

Route::get('/pesanan', function () {
    if (!session()->has('username')) {
        return redirect()->route('login');
}
    return view('pesanan');
})->name('pesanan');
