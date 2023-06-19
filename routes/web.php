<?php

use App\Http\Controllers\IbuHamilController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\TimbanganController;
use App\Http\Controllers\UserController;

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
    return view('customer.home');
})->name('my-portal');

//Admin
Route::get('/admin', [UserController::class, 'show'])->name('admin');
Route::get('/admin/user/{user}', [UserController::class, 'detail'])->name('user_detail');
Route::get('/admin/user/{user}/delete', [UserController::class, 'delete'])->name('user_delete');

Route::get('/admin/data-imunisasi', [ImunisasiController::class, 'index'])->name('data_imunisasi');
Route::get('/admin/data-imunisasi/create', [ImunisasiController::class, 'create'])->name('create_imunisasi');

Route::get('/admin/data-timbangan', [TimbanganController::class, 'index'])->name('data_timbangan');
Route::get('/admin/data-timbangan/create', [TimbanganController::class, 'create'])->name('create_timbangan');

Route::get('/admin/data-ibu-hamil', [IbuHamilController::class, 'index'])->name('data_ibu_hamil');
Route::get('/admin/data-ibu-hamil/create', [IbuHamilController::class, 'create'])->name('create_data_ibu_hamil');

//User
Route::get('/my-portal/profile-saya', [UserController::class, 'showWarga'])->name('profile_warga');
Route::get('/my-portal/lengkapi-data', [UserController::class, 'createWarga'])->name('create_warga');
Route::post('/my-portal/lengkapi-data', [UserController::class, 'storeWarga'])->name('store_warga');
Route::get('/my-portal/{user}', [UserController::class, 'editWarga'])->name('edit_warga');
Route::patch('/my-portal/{user}', [UserController::class, 'updateWarga'])->name('update_warga');