<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;

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

Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos_create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos_store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos_edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos_update');
});

Route::fallback(function(){
    return response()->json(['error' => 'Rota não encontrada.'], 404);
});