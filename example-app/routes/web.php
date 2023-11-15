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

// Route::get('/novojogo', function () {
//     return view('jogos');
// })->name('jogos');

Route::get('/jogos',[jogosController::class, 'index'])->name('jogos');

Route::get('/home', function () {
    return view('welcome');
})->name('home-index');

Route::fallback(function(){
    return "Erro ao encontrar a rota informada.";
});