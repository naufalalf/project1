<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/dashboard', [DaftarController::class, 'tampildaftar'])->name('tampildaftar')->middleware('auth');
// Route::get('dashboard/tambah', [DaftarController::class, 'tambahdaftar'])->name('tambahdaftar')->middleware('auth');
// Route::post('dashboard/simpan', [DaftarController::class, 'simpandaftar'])->name('simpandaftar')->middleware('auth');
