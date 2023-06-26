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

Route::get('/register/lengkapi-data', [UserController::class, 'createWarga'])->name('create_warga');
Route::post('/register/lengkapi-data', [UserController::class, 'storeWarga'])->name('store_warga');

//Admin
Route::get('/admin', [UserController::class, 'admin'])->name('admin');
Route::get('/admin/user/{user}', [UserController::class, 'detail'])->name('user_detail');
Route::get('/admin/user/{user}/delete', [UserController::class, 'delete'])->name('user_delete');

Route::get('/data-imunisasi', [ImunisasiController::class, 'index'])->name('data_imunisasi');
Route::get('/admin/data-imunisasi/create', [ImunisasiController::class, 'create'])->name('create_imunisasi');
Route::post('/admin/data-imunisasi/create', [ImunisasiController::class, 'store'])->name('store_imunisasi');
Route::get('/admin/data-imunisasi/{imunisasi}', [ImunisasiController::class, 'show'])->name('show_imunisasi');
Route::get('/admin/data-imunisasi/{imunisasi}/edit', [ImunisasiController::class, 'edit'])->name('edit_imunisasi');
Route::patch('/admin/data-imunisasi/{imunisasi}/edit', [ImunisasiController::class, 'update'])->name('update_imunisasi');
Route::delete('/admin/data-imunisasi/{imunisasi}/delete', [ImunisasiController::class, 'delete'])->name('delete_imunisasi');
// Route::get('/data-imunisasi/cetak-pdf', [ImunisasiController::class, 'pdfView'])->name('rekap_imunisasi');
Route::get('/data-imunisasi/cetak-pdf', [ImunisasiController::class, 'pdfExport'])->name('print_imunisasi');

Route::get('/data-timbangan', [TimbanganController::class, 'index'])->name('data_timbangan');
Route::get('/admin/data-timbangan/create', [TimbanganController::class, 'create'])->name('create_timbangan');
Route::post('/admin/data-timbangan/create', [TimbanganController::class, 'store'])->name('store_timbangan');
Route::get('/admin/data-timbangan/{timbangan}', [TimbanganController::class, 'show'])->name('show_timbangan');
Route::get('/admin/data-timbangan/{timbangan}/edit', [TimbanganController::class, 'edit'])->name('edit_timbangan');
Route::patch('/admin/data-timbangan/{timbangan}/edit', [TimbanganController::class, 'update'])->name('update_timbangan');
Route::delete('/admin/data-timbangan/{timbangan}/delete', [TimbanganController::class, 'delete'])->name('delete_timbangan');

Route::get('/data-ibu-hamil', [IbuHamilController::class, 'index'])->name('data_ibu_hamil');
Route::get('/admin/data-ibu-hamil/create', [IbuHamilController::class, 'create'])->name('create_data_ibu_hamil');
Route::post('/admin/data-ibu-hamil/create', [IbuHamilController::class, 'store'])->name('store_data_ibu_hamil');
Route::get('/admin/data-ibu-hamil/{ibuhamil}', [IbuHamilController::class, 'show'])->name('show_data_ibu_hamil');
Route::get('/admin/data-ibu-hamil/{ibuhamil}/edit', [IbuHamilController::class, 'edit'])->name('edit_data_ibu_hamil');
Route::patch('/admin/data-ibu-hamil/{ibuhamil}/edit', [IbuHamilController::class, 'update'])->name('update_data_ibu_hamil');
Route::delete('/admin/data-ibu-hamil/{ibuhamil}/delete', [IbuHamilController::class, 'delete'])->name('delete_data_ibu_hamil');

//User
Route::get('/my-portal/data-imunisasi', [ImunisasiController::class, 'index'])->name('customer_data_imunisasi');
Route::get('/my-portal/data-timbangan', [TimbanganController::class, 'index'])->name('customer_data_timbangan');
Route::get('/my-portal/data-ibu-hamil', [IbuHamilController::class, 'index'])->name('customer_data_ibu_hamil');
Route::get('/my-portal/profile-saya', [UserController::class, 'showWarga'])->name('profile_warga');
Route::get('/my-portal/{user}', [UserController::class, 'editWarga'])->name('edit_warga');
Route::patch('/my-portal/{user}', [UserController::class, 'updateWarga'])->name('update_warga');
