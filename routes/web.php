<?php

use App\Http\Controllers\Car\CarController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('clondaik/car')->group(function () {
    Route::get('cars', [CarController::class, 'index'])->name('car.index');
    Route::get('create', [CarController::class, 'create'])->name('car.create');
    Route::get('car', [CarController::class, 'store'])->name('car.store');
    Route::get('show', [CarController::class, 'show'])->name('car.show');
    Route::get('car', [CarController::class, 'edit'])->name('car.edit');
    Route::get('car', [CarController::class, 'update'])->name('car.update');
    Route::get('car', [CarController::class, 'destroy'])->name('car.destroy');
});
