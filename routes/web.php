<?php

use App\Http\Controllers\AuthController;
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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/my-portal', function () {
    return view('customer.home');
})->name('my-portal');


//Auth Route
Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register/store', [AuthController::class, 'store'])->name('store');
Route::get('/register/lengkapi-data', [UserController::class, 'createWarga'])->name('create_warga');
Route::post('/register/lengkapi-data', [UserController::class, 'storeWarga'])->name('store_warga');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/cek-data', [AuthController::class, 'auth'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Admin
Route::get('/admin', [UserController::class, 'admin'])->name('admin');
Route::get('/admin/user', [UserController::class, 'super'])->name('super');
Route::get('/admin/user/create', [UserController::class, 'createAdmin'])->name('create_admin');
Route::post('/admin/user/create', [UserController::class, 'storeAdmin'])->name('store_admin');
Route::get('/admin/user/{user}', [UserController::class, 'detail'])->name('user_detail');
Route::get('/admin/user/{user}/delete', [UserController::class, 'delete'])->name('user_delete');

Route::get('/admin/data-periksa/data-imunisasi', [ImunisasiController::class, 'index'])->name('data_imunisasi');
Route::get('/admin/data-periksa/data-imunisasi/create', [ImunisasiController::class, 'create'])->name('create_imunisasi');
Route::post('/admin/data-periksa/data-imunisasi/create', [ImunisasiController::class, 'store'])->name('store_imunisasi');
Route::get('/admin/data-periksa/data-imunisasi/{imunisasi}', [ImunisasiController::class, 'show'])->name('show_imunisasi');
Route::get('/admin/data-periksa/data-imunisasi/{imunisasi}/edit', [ImunisasiController::class, 'edit'])->name('edit_imunisasi');
Route::patch('/admin/data-periksa/data-imunisasi/{imunisasi}/edit', [ImunisasiController::class, 'update'])->name('update_imunisasi');
Route::delete('/admin/data-periksa/data-imunisasi/{imunisasi}/delete', [ImunisasiController::class, 'delete'])->name('delete_imunisasi');
Route::get('/admin/data-imunisasi/download-pdf', [ImunisasiController::class, 'pdfExport'])->name('cetak_imunisasi');

Route::get('/admin/data-periksa/data-timbangan', [TimbanganController::class, 'index'])->name('data_timbangan');
Route::get('/admin/data-periksa/data-timbangan/create', [TimbanganController::class, 'create'])->name('create_timbangan');
Route::post('/admin/data-periksa/data-timbangan/create', [TimbanganController::class, 'store'])->name('store_timbangan');
Route::get('/admin/data-periksa/data-timbangan/{timbangan}', [TimbanganController::class, 'show'])->name('show_timbangan');
Route::get('/admin/data-periksa/data-timbangan/{timbangan}/edit', [TimbanganController::class, 'edit'])->name('edit_timbangan');
Route::patch('/admin/data-periksa/data-timbangan/{timbangan}/edit', [TimbanganController::class, 'update'])->name('update_timbangan');
Route::delete('/admin/data-periksa/data-timbangan/{timbangan}/delete', [TimbanganController::class, 'delete'])->name('delete_timbangan');
Route::get('/admin/data-timbangan/download-pdf', [TimbanganController::class, 'pdfExport'])->name('cetak_timbangan');

Route::get('/admin/data-periksa/data-ibu-hamil', [IbuHamilController::class, 'index'])->name('data_ibu_hamil');
Route::get('/admin/data-periksa/data-ibu-hamil/create', [IbuHamilController::class, 'create'])->name('create_data_ibu_hamil');
Route::post('/admin/data-periksa/data-ibu-hamil/create', [IbuHamilController::class, 'store'])->name('store_data_ibu_hamil');
Route::get('/admin/data-periksa/data-ibu-hamil/{ibuhamil}', [IbuHamilController::class, 'show'])->name('show_data_ibu_hamil');
Route::get('/admin/data-periksa/data-ibu-hamil/{ibuhamil}/edit', [IbuHamilController::class, 'edit'])->name('edit_data_ibu_hamil');
Route::patch('/admin/data-periksa/data-ibu-hamil/{ibuhamil}/edit', [IbuHamilController::class, 'update'])->name('update_data_ibu_hamil');
Route::delete('/admin/data-periksa/data-ibu-hamil/{ibuhamil}/delete', [IbuHamilController::class, 'delete'])->name('delete_data_ibu_hamil');
Route::get('/admin/data-ibu-hamil/download-pdf', [IbuHamilController::class, 'pdfExport'])->name('cetak_ibu_hamil');

//User
Route::get('/my-portal/data-imunisasi', [ImunisasiController::class, 'index'])->name('customer_data_imunisasi');
Route::get('/my-portal/data-timbangan', [TimbanganController::class, 'index'])->name('customer_data_timbangan');
Route::get('/my-portal/data-ibu-hamil', [IbuHamilController::class, 'index'])->name('customer_data_ibu_hamil');
Route::get('/my-portal/profile-saya/{user}', [UserController::class, 'detail'])->name('profile_warga');
Route::patch('/my-portal/profile-saya/{user}', [UserController::class, 'update'])->name('update_warga');
