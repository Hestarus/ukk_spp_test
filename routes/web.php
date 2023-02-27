<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPetugasController;
use App\Http\Controllers\AdminSiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/siswa/home', [HomeController::class, 'home'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');
    Route::get('/admin/home/{id}/edit', [AdminController::class, 'edit']);
    Route::post('/admin/home/store', [AdminSiswaController::class, 'store']);
    Route::put('/admin/home/{id}', [AdminSiswaController::class, 'update']);
    Route::delete('/admin/home/{id}', [AdminSiswaController::class, 'destroy']);

    Route::get('/admin/petugas', [AdminController::class, 'homePetugas']);
    Route::get('/admin/petugas/{id}/edit', [AdminController::class, 'petugas_edit']);
    Route::post('/admin/petugas/store', [AdminPetugasController::class, 'store']);
    Route::put('/admin/petugas/{id}', [AdminPetugasController::class], 'update');
    Route::delete('/admin/petugas/{id}', [AdminPetugasController::class], 'destroy');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [PegawaiController::class, 'home'])->name('manager.home');
});
