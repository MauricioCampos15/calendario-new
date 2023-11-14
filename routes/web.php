<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index']);

Route::get('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);

Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);

Route::post('/evento/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
