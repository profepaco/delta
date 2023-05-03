<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GanadoController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\PatenteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductorController;
use App\Http\Controllers\PropiedadController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('productores', ProductorController::class);
Route::resource('especies', EspecieController::class);

Route::get('/productores/{productore}/ganado',[GanadoController::class, 'create'])->name('ganado.create');
Route::post('/productores/{productore}/ganado',[GanadoController::class, 'store'])->name('ganado.store');
Route::get('/productores/{productore}/ganado/{ganado}',[GanadoController::class,'edit'])->name('ganado.edit');
Route::put('/ganado/{ganado}',[GanadoController::class,'update'])->name('ganado.update');
Route::delete('/ganado/{ganado}',[GanadoController::class,'destroy'])->name('ganado.destroy');

Route::get('/productores/{productore}/propiedades',[PropiedadController::class, 'create'])->name('propiedades.create');
Route::post('/productores/{productore}/propiedades',[PropiedadController::class, 'store'])->name('propiedades.store');
Route::get('/productores/{productore}/propiedades/{propiedad}',[PropiedadController::class,'edit'])->name('propiedad.edit');
Route::put('/propiedades/{propiedad}',[PropiedadController::class,'update'])->name('propiedades.update');
Route::delete('/propiedades/{propiedad}',[PropiedadController::class,'destroy'])->name('propiedades.destroy');

Route::get('/productores/{productore}/patente',[PatenteController::class, 'create'])->name('patente.create');
Route::post('/productores/{productore}/propiedades',[PatenteController::class, 'store'])->name('patente.store');


require __DIR__.'/auth.php';
