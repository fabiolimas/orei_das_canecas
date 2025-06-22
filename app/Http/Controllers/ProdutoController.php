<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
   public function show($id){

      $produto = Produto::findOrFail($id);
    

    return view('frontend.produto.show', compact('produto'));

   }
}
