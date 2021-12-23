<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UserController;

Route::get('/',[LoginController::class, 'index'])->middleware('auth');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'register_store'])->name('register.store');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

// User
Route::get('/user', [UserController::class, 'user_index'])->name('user');
Route::get('/user/{user:nama}', [UserController::class, 'user_profile'])->name('user.profile');
Route::get('/user/detail/{user:id}', [UserController::class, 'user_detail'])->name('user.detail');
Route::get('/user/admin/create', [UserController::class, 'user_create'])->name('user.create');
Route::post('/user/admin/create', [UserController::class, 'user_store'])->name('user.store');
Route::get('/user/edit/{user:id}', [UserController::class, 'user_edit'])->name('user.edit');
Route::put('/user/edit/{user:id}', [UserController::class, 'user_update'])->name('user.update');
Route::delete('/user/delete/{user:id}', [UserController::class, 'user_delete'])->name('user.delete');

// All
Route::get('/dokumen', [InputController::class, 'index_dokumen'])->name('dokumen');
Route::delete('/dokumen/destroy/{twoinput:id}', [InputController::class, 'destroy_dokumen'])->name('destroy.dokumen');
Route::post('/dokumen/store', [InputController::class, 'store_dokumen'])->name('store.dokumen');
Route::post('/dokumen/edit/{twoinput:id}', [InputController::class, 'edit_dokumen'])->name('edit.dokumen');

Route::get('/laporan', [InputController::class, 'index'])->name('index');
Route::get('/laporan/detail/{oneinput:id}', [InputController::class, 'detail'])->name('detail.laporan');
Route::put('/laporan/detail/{oneinput:id}', [InputController::class, 'reset_jumlah_volume'])->name('reset_volume.laporan');
Route::get('/laporan/create', [InputController::class, 'create_laporan'])->name('create.laporan');
Route::post('/laporan/store', [InputController::class, 'store_laporan'])->name('store.laporan');
Route::get('/laporan/edit/{oneinput:id}', [InputController::class, 'edit_laporan'])->name('edit.laporan');
Route::put('/laporant/edit/{oneinput:id}', [InputController::class, 'update_laporan'])->name('update.laporan');
Route::delete('/laporan/delete/{oneinput:id}', [InputController::class, 'destroy_laporan'])->name('destroy.laporan');



// Output
Route::get('/dashboard', [OutputController::class, 'index'])->name('dashboard');
Route::get('/rekap', [OutputController::class, 'rekap'])->name('rekap');
Route::get('/output/excel/table', [OutputController::class, 'exportWithView'])->name('output.excel.table');
// Route::get('/output/excel/table', function() {return view('output.excel.sheet1');});
