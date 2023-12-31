<?php

use App\Http\Controllers\MedicineController;
use App\Models\Medicine;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('home');
});

route::prefix('/medicine')->name('medicine.')->group(function() {
    Route::get('/create', [MedicineController::class, 'create'])->name('create');
    Route::post('/store', [MedicineController::class, 'store'])->name('store');
    Route::get('/', [MedicineController::class, 'index'])->name('home');
    Route::get('/stock', [MedicineController::class, 'stock'])->name('stock');
    Route::get('/{id}', [MedicineController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [MedicineController::class, 'update'])->name('update');
    Route::delete('/{id}', [MedicineController::class, 'destroy'])->name('delete');
    Route::get('/data/stock/{id}', [MedicineController::class, 'stockEdit'])->name('stock.edit');
    Route::patch('/data/stock/{id}', [MedicineController::class, 'stockUpdate'])->name('stock.update');
});
route::prefix('/pengguna')->name('pengguna.')->group(function() {
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::get('/', [UserController::class, 'index'])->name('akun');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/{id}', [UserController:: class, 'edit'])->name('edit');
    Route::delete('/{id}', [UserController:: class, 'destroy'])->name('delete');
    Route::patch('/{id}', [UserController::class, 'update'])->name('update');
}); 