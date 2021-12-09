<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OutputController;

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
Route::get('/login', [LoginController::class, 'index']);

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
// Umum
Route::get('/input/common', [InputController::class, 'umum_index']);
// PPAI
Route::get('/input/common', [InputController::class, 'ppai_index']);
// PPAII
Route::get('/input/common', [InputController::class, 'ppaii_index']);
// SKKI
Route::get('/input/common', [InputController::class, 'skki_index']);
// PAPK
Route::get('/input/common', [InputController::class, 'papk_index']);

// Output
Route::get('/dashboard', [OutputController::class, 'index']);
