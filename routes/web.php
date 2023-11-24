<?php

use App\Http\Controllers\ManzanaControlador;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\manzanasEliminadas;

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

// Rutas necesarias para el CRUD

// CREATE

// Vista del formulario de insertar
Route::get('/insertarManzanas', [ManzanaControlador::class, 'create'])->name('insertar');

// Insertar la manzana
Route::post('/insertarManzanas/insertar', [ManzanaControlador::class, 'store'])->name('crear');


// READ
Route::get('/', [ManzanaControlador::class,'index']);

// UPDATE

// Vista del formulario para editar la manzana
Route::get('/editarManzanas', [ManzanaControlador::class, 'edit']);

// Editar la manzana
Route::post('/editarManzana', [ManzanaControlador::class, 'update']);


// DELETE con parametro

// Middleware para que nos printe en el laravel.log la manzana que se ha eliminado
Route::middleware('manzanaLog')->group(function () {
    Route::get('/eliminarManzanas/{id}', [ManzanaControlador::class, 'destroy']);
});

require __DIR__.'/auth.php';
