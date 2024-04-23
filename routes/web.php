<?php

use Illuminate\Routing\RouteAction;
use App\Http\Controllers\FichaController;
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
})->name('welcome');

Route::get('/ficha', [FichaController::class,'index'])->name('ficha.index');

Route::get('/ficha/create',[FichaController::class,'create'])->name('ficha.create');

Route::post('/ficha',[FichaController::class,'store'])->name('ficha.store');


Route::post('/ficha/imprimir', [FichaController::class,'imprimir'])->name('factura.imprimir');

