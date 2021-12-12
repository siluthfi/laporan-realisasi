<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UserController;

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

// User
Route::get('/user', [UserController::class, 'user_index'])->name('user');
Route::get('/user/detail/{user:id}', [UserController::class, 'user_detail'])->name('user.detail');
Route::get('/user/create', [UserController::class, 'user_create'])->name('user.create');
Route::post('/user/create', [UserController::class, 'user_store'])->name('user.store');
Route::get('/user/edit/{user:id}', [UserController::class, 'user_edit'])->name('user.edit');
Route::put('/user/edit/{user:id}', [UserController::class, 'user_update'])->name('user.update');
Route::delete('/user/delete/{user:id}', [UserController::class, 'user_delete'])->name('user.delete');


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
Route::delete('/dokumen/destroy/{twoinput:id}', [InputController::class, 'destroy'])->name('destroy');
Route::post('/dokumen/store/{twoinput:id}', [InputController::class, 'store_dokumen'])->name('store.dokumen');
Route::post('/dokumen/edit/{twoinput:id}', [InputController::class, 'edit_dokumen'])->name('edit.dokumen');

Route::get('/laporan', [InputController::class, 'index'])->name('index');
Route::get('/laporan/detail/{oneinput:id}', [InputController::class, 'detail'])->name('detail.laporan');
Route::get('/laporan/create', [InputController::class, 'admin_create'])->name('create.laporan');
Route::post('/laporan/store', [InputController::class, 'store_laporan'])->name('store.laporan');
Route::get('/laporan/edit/{oneinput:id}', [InputController::class, 'edit_laporan'])->name('edit.laporan');
Route::put('/laporant/edit/{oneinput:id}', [InputController::class, 'update_laporan'])->name('update.laporan');
Route::delete('/laporan/delete/{oneinput:id}', [InputController::class, 'destroy_laporan'])->name('destroy.laporan');


// Output
Route::get('/dashboard', [OutputController::class, 'index'])->name('dashboard');
Route::get('/rekap', [OutputController::class, 'rekap'])->name('rekap');
