<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

// Input
// Admin
Route::get('/input/admin', [InputController::class, 'admin_index'])->name('admin.index');
Route::get('/input/admin/detail/{oneinput:id}', [InputController::class, 'admin_detail'])->name('admin.detail');
Route::get('/input/admin/create', [InputController::class, 'admin_create'])->name('admin.create');
Route::post('/input/admin/create', [InputController::class, 'admin_store'])->name('admin.store');
Route::get('/input/admin/edit/{oneinput:id}', [InputController::class, 'admin_edit'])->name('admin.edit');
Route::put('/input/admin/edit/{oneinput:id}', [InputController::class, 'admin_update'])->name('admin.update');
Route::delete('/input/admin/delete/{oneinput:id}', [InputController::class, 'admin_delete'])->name('admin.delete');



// Common
Route::get('/input/common', [InputController::class, 'common_index'])->name('common.index');
Route::get('/input/detail/{oneinput:id}', [InputController::class, 'common_detail'])->name('common.detail');
Route::post('input/common/store', [InputController::class, 'common_store'])->name('common.store');
Route::post('/input/common/edit{oneinput:id}', [InputController::class, 'common_edit'])->name('common.edit');
Route::delete('input/common/delete{oneinput:id}', [InputController::class, 'common_delete'])->name('common.delete');

// Umum
Route::get('/input/umum', [InputController::class, 'umum_index']);

// All
Route::get('/laporan', [InputController::class, 'index'])->name('index');
Route::delete('/dokumen/{twoinput:id}/destroy', [InputController::class, 'destroy'])->name('destroy');
Route::get('/laporan/{oneinput:id}/detail', [InputController::class, 'detail'])->name('detail');
Route::post('/laporan/{oneinput:id}/store', [InputController::class, 'store_laporan'])->name('store.laporan');
Route::post('/laporan/{oneinput:id}/edit', [InputController::class, 'edit_laporan'])->name('edit.laporan');
Route::post('/dokumen/{twoinput:id}/store', [InputController::class, 'store_dokumen'])->name('store.dokumen');
Route::post('/dokumen/{twoinput:id}/edit', [InputController::class, 'edit_dokumen'])->name('edit.dokumen');

// Output
Route::get('/output', [OutputController::class, 'index']);
