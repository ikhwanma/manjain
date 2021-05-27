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

Route::get('/list', [App\Http\Controllers\LowonganController::class, 'index'])->name('list');
Route::get('/buatLowongan', [App\Http\Controllers\ButtonController::class, 'showBuatLowongan'])->name('buatLowongan');
Route::get('/editLowongan', [App\Http\Controllers\ButtonController::class, 'showEditLowongan'])->name('editLowongan');
Route::get('/halamanLowongan', [App\Http\Controllers\ButtonController::class, 'showHalamanLowongan'])->name('halamanLowongan');
Route::get('/profilPerusahaan', [App\Http\Controllers\ButtonController::class, 'showProfilPerusahaan'])->name('profilPerusahaan');

Route::get('/buatPerusahaan', [App\Http\Controllers\ButtonController::class, 'showBuatPerusahaan'])->name('buatPerusahaan');
Route::post('/addPerusahaan', [App\Http\Controllers\PerusahaanController::class, 'addPerusahaan'])->name('addPerusahaan');
Route::get('/{perusahaan}', [App\Http\Controllers\PerusahaanController::class, 'show'])->name('perusahaan');
Route::get('/dashboard', [App\Http\Controllers\PerusahaanController::class, 'index'])->name('dashboard');

Route::post('addLowongan', [App\Http\Controllers\LowonganController::class, 'addLowongan'])->name('addLowongan');
Route::get('/buatLowongan/{perusahaan}', [App\Http\Controllers\PerusahaanController::class, 'showBuatLowongan'])->name('buatLowonganPerusahaan');
