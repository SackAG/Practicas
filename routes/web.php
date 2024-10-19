<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ReticulaController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::resource('alumnos', AlumnoController::class);
Route::resource('carreras', CarreraController::class);
Route::resource('deptos', DeptoController::class);
Route::resource('materias', MateriaController::class);
Route::resource('periodos', PeriodoController::class);
Route::Resource('plazas', PlazaController::class);
Route::resource('puestos', PuestoController::class);
Route::resource('reticulas', ReticulaController::class);

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

require __DIR__.'/auth.php';

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
