<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrackingBarangController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index');

// auth route
Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function () {
  Route::get('/login', 'loginView')->name('login.view');
});

// dashboard route
Route::controller(DashboardController::class)->prefix('dashboard')->group(function () {
  Route::get('/', 'index')->name('dashboard.index.view');

  // tracking barang route
  Route::controller(TrackingBarangController::class)->prefix('tracking-barang')->name('tracking-barang.')->group(function () {
    Route::get('/', 'index')->name('index.view');
    Route::get('/create', 'createView')->name('create.view');
  });
});
