<?php

use App\Models\Produto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');
Route::get('add-cart', function(){
    echo 'carrinho';
})->name('carrinho.adicionar');
Route::get('/catalogo', [ProdutoController::class , 'catalogo'])->name('produto.catalogo');
Route::get('/categorias', [ProdutoController::class , 'categorias'])->name('produto.categorias');


