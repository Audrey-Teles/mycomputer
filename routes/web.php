<?php

use App\Http\Controllers\CardsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

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

Route::get('/', [CardsController::class, 'index'])->middleware(['auth'])->name('index');;
Route::get('/criar', [CardsController::class, 'create'])->middleware(['auth'])->name('criar');;
Route::post('/salvar', [CardsController::class, 'store'])->middleware(['auth'])->name('salvar');;
Route::get('/{id}/editar/', [CardsController::class, 'edit'])->middleware(['auth'])->name('editar');;
Route::put('/{id}', [CardsController::class, 'update'])->middleware(['auth'])->name('atualizar');;
Route::delete('/{id}', [CardsController::class, 'destroy'])->middleware(['auth'])->name('deletar');;
Route::get('/meuscomponentes', [CardsController::class, 'showmy'])->middleware(['auth'])->name('meuscomponentes');;

require __DIR__ . '/auth.php';


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    return view('dashboard');

})->name('dashboard');


Route::controller(GoogleController::class)->group(function () {

    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');

    Route::get('auth/google/callback', 'handleGoogleCallback');

});
