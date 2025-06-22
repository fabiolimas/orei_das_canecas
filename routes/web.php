<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');
Route::get('add-cart', function(){
    echo 'carrinho';
})->name('carrinho.adicionar');
Route::get('/catalogo', function () {
    $produtos = Produto::paginate(16);
    return view('catalogo', compact('produtos'));
})->name('catalogo');


