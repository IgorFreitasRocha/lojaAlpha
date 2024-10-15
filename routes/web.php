<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ImagemController;
use App\Http\Controllers\EstoqueController;

Route::get('/', function () {
    return view('index');
});

// Rota para Produto
Route::get('/produto',[ProdutoController::class, 'index']);

// Rota para Categoria
Route::get('/categoria', [CategoriaController::class, 'index']);

// Rota para Imagens
Route::get('/imagem', [ImagemController::class, 'index']);

// Rota para Estoque
Route::get('/estoque', [EstoqueController::class, 'index']);