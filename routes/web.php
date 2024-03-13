<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/crear', [HomeController::class, 'crear'])->name('crear');
Route::post('/registrar', [HomeController::class, 'registrarPropiedad'])->name('registrar');
Route::get('/edit/{id}', [HomeController::class, 'editar'])->name('editar');
Route::put('/update/{id}', [HomeController::class, 'actualizar'])->name('actualizar');
Route::get('/eliminar/{id}', [HomeController::class, 'eliminar'])->name('eliminar');
