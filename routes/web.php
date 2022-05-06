<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TrackingBarangController;
use App\Http\Controllers\TruckController;
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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/tracking-barang', [TrackingBarangController::class, 'trackingBarang'])->name('tracking.barang');

// auth route
Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function () {
  Route::get('/login', 'loginView')->name('login.view');
  Route::post('/login', 'loginAction')->name('login.action');
  Route::post('/logout', 'logoutAction')->name('logout.action');
});

// dashboard route
Route::controller(DashboardController::class)->prefix('dashboard')->middleware(['auth'])->group(function () {
  Route::get('/', 'index')->name('dashboard.index.view');

  // tracking barang route
  Route::controller(TrackingBarangController::class)->prefix('tracking-barang')->name('tracking-barang.')->group(function () {
    Route::get('/', 'index')->name('index.view');
    Route::get('/create', 'createView')->name('create.view');
    Route::post('/create', 'createAction')->name('create.action');
    Route::get('/update/{no_surat_jalan}', 'updateView')->name('update.view');
    Route::patch('/update/{no_surat_jalan}', 'updateAction')->name('update.action');
    Route::get('/detail/{no_surat_jalan}', 'detailView')->name('detail.view');
    Route::get('/delete/{no_surat_jalan}', 'deleteAction')->name('delete.action');
    Route::post('/create/timeline/{no_surat_jalan}', 'createTimelineAction')->name('create.timeline.action');
    Route::get('/timeline/{id}', 'timelineUpdateView')->name('timeline.update.view');
    Route::patch('/timeline/{id}', 'timelineUpdateAction')->name('timeline.update.action');
    Route::get('/datatables', 'datatables')->name('datatables');
  });

  // truck route
  Route::controller(TruckController::class)->prefix('truck')->name('truck.')->group(function () {
    Route::get('/', 'index')->name('index.view');
    Route::get('/create', 'createView')->name('create.view');
    Route::post('/create', 'createAction')->name('create.action');
    Route::get('/datatables', 'datatables')->name('datatables');
  });
});
