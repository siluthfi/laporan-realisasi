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
// PPAI
Route::get('/input/ppai', [InputController::class, 'ppai_index']);
// PPAII
Route::get('/input/ppaii', [InputController::class, 'ppaii_index']);
// SKKI
Route::get('/input/skkii', [InputController::class, 'skki_index']);
// PAPK
Route::get('/input/papk', [InputController::class, 'papk_index']);

// Output
Route::get('/output', [OutputController::class, 'index']);
