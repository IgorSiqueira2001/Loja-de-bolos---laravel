<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroCakes;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\listagemBolos;

Route::get('/', function () {
    return view('welcome');
});
//Cadastro de Bolos
Route::get('/cadastroBolo', [CadastroCakes::class, 'show']);
Route::post('/cadastroBolo', [CadastroCakes::class, 'createCakes']);
//Listagem de Bolos
Route::get('/listagemDeBolos', [listagemBolos::class, 'getCakes']);
Route::delete('/listagemDeBolos/{id}', [listagemBolos::class, 'deleteCakes'])->name('cakes.destroy');

Route::get('/admin/usuarios/', [CadastroCakes::class, 'getUser']);
Route::get('/login', [LoginController::class, 'index']);
