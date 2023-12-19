<?php

use App\Http\Controllers\PelaksanaanController;
use App\Http\Controllers\PerencanaanController;
use App\Http\Controllers\ReportController;
use App\Models\Perencanaan;
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
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::user()->id=='1'){
            return view('admin.index');
        } else {
            return view('admin.jurusan');
        }
    })->name('admin.index');
});

Route::group(['prefix' => 'perencanaan', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', ]], function() {
    Route::get('view', [PerencanaanController::class, 'index'])->name('perencanaan.view');
    Route::get('add', [PerencanaanController::class, 'add'])->name('perencanaan.add');
    Route::post('store', [PerencanaanController::class, 'store'])->name('perencanaan.store');
    Route::get('edit/{id}', [PerencanaanController::class, 'edit'])->name('perencanaan.edit');
    Route::post('update/{id}', [PerencanaanController::class, 'update'])->name('perencanaan.update');
    Route::get('delete/{id}', [PerencanaanController::class, 'delete'])->name('perencanaan.delete');
});

Route::group(['prefix' => 'pelaksanaan', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', ]], function() {
    Route::get('view', [PelaksanaanController::class, 'index'])->name('pelaksanaan.view');
    Route::get('add', [PelaksanaanController::class, 'add'])->name('pelaksanaan.add');
    Route::post('store', [PelaksanaanController::class, 'store'])->name('pelaksanaan.store');
    Route::get('edit/{id}', [PelaksanaanController::class, 'edit'])->name('pelaksanaan.edit');
    Route::post('update/{id}', [PelaksanaanController::class, 'update'])->name('pelaksanaan.update');
    Route::get('delete/{id}', [PelaksanaanController::class, 'delete'])->name('pelaksanaan.delete');
});

Route::group(['prefix' => 'report', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', ]], function() {
    Route::get('view', [ReportController::class, 'index'])->name('report.view');
});
