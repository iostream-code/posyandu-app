<?php

use App\Http\Controllers\IbuHamilController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\TimbanganController;

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

Auth::routes();

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/my-portal', function () {
    return view('customers.home');
})->name('my-portal');

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');

//Admin
Route::get('/admin/data-imunisasi', [ImunisasiController::class, 'index'])->name('data_imunisasi');
Route::get('/admin/data-imunisasi/create', [ImunisasiController::class, 'create'])->name('create_imunisasi');

Route::get('/admin/data-timbangan', [TimbanganController::class, 'index'])->name('data_timbangan');
Route::get('/admin/data-timbangan/create', [TimbanganController::class, 'create'])->name('create_timbangan');

Route::get('/admin/data-ibu-hamil', [IbuHamilController::class, 'index'])->name('data_ibu_hamil');
Route::get('/admin/data-ibu-hamil/create', [IbuHamilController::class, 'create'])->name('create_data_ibu_hamil');

