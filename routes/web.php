<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('painel');
})->name('painel.controle');

//* rota index
Route::get('/index-cliente', [ClienteController::class, 'index'])->name('cliente.index');
//* Formulário de criação
Route::get('/create-cliente', [ClienteController::class, 'create'])->name('cliente.create');
//* Mostra resultado
Route::get('/show-cliente', [ClienteController::class, 'show'])->name('cliente.show');
//* Salva as informações no banco
Route::post('/store-cliente', [ClienteController::class, 'store'])->name('cliente.store');
//* Visualiza dados de acordo com id
Route::get('/edit-cliente/{cliente}', [ClienteController::class, 'edit'])->name('cliente.edit');
//* Edita as informações no banco de dados
Route::put('/update-cliente/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');
//! Put(), atualiza dados existentes
//* Deleta informações do banco
Route::delete('/destroy-cliente{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');



