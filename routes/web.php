<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ImunisasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/my-portal', function () {
    return view('customers.home');
})->name('my-portal');

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');

//Admin
Route::get('/admin/data-imunisasi', [ImunisasiController::class, 'index'])->name('data_imunisasi');
