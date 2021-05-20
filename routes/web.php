<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/list', [\App\Http\Controllers\ButtonController::class, 'showList']) ->name('list');

Route::get('/buatLowongan', [\App\Http\Controllers\ButtonController::class, 'showBuatLowongan']) ->name('buatLowongan');

Route::get('/buatPerusahaan', [\App\Http\Controllers\ButtonController::class, 'showBuatPerusahaan']) ->name('buatPerusahaan');

Route::get('/editLowongan', [\App\Http\Controllers\ButtonController::class, 'showEditLowongan']) ->name('editLowongan');

Route::get('/halamanLowongan', [\App\Http\Controllers\ButtonController::class, 'showHalamanLowongan']) ->name('halamanLowongan');

Route::get('/profilPerusahaan', [\App\Http\Controllers\ButtonController::class, 'showProfilPerusahaan']) ->name('profilPerusahaan');