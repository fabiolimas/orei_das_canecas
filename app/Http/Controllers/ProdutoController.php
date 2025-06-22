<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
   public function show($id){

      $produto = Produto::findOrFail($id);
    

    return view('frontend.produto.show', compact('produto'));

   }

   public function catalogo(){
      $produtos=Produto::all();
      return view('frontend.catalogo', compact('produtos'));
   }

   public function categorias(){

      $categorias=Categoria::all();

      return view('frontend.categorias', compact('categorias'));
   }
}
