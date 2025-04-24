<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroCakes;
use App\Http\Controllers\EditBolos;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\listagemBolos;

Route::get('/', function () {
    return view('welcome');
});
//Cadastro de Bolos
Route::get('/cadastroBolo', [CadastroCakes::class, 'show']);
Route::post('/cadastroBolo', [CadastroCakes::class, 'createCakes'])->name('cake.create');
//Listagem de Bolos
Route::get('/listagemDeBolos', [listagemBolos::class, 'getCakes'])->name('cakes.list');
Route::delete('/listagemDeBolos/{id}', [listagemBolos::class, 'deleteCakes'])->name('cakes.destroy');
//Edição de Bolo
Route::get('/cadastroBolo/{id}', [EditBolos::class, 'show']);
Route::put('/cadastroBolo/{id}', [EditBolos::class, 'editCakes'])->name('cakes.update');

Route::get('/admin/usuarios/', [CadastroCakes::class, 'getUser']);
Route::get('/login', [LoginController::class, 'index']);
