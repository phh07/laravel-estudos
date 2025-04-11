<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('painel');
})->name('painel.controle');

Route::get('/index-cliente', [ClienteController::class, 'index'])->name('cliente.index');

Route::get('/show-cliente', [ClienteController::class, 'show'])->name('cliente.show');

Route::get('/create-cliente', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/store-cliente', [ClienteController::class, 'store'])->name('cliente.store');




