<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $produtos=Produto::paginate(12);

        return view('frontend.index',compact('produtos'));
    }
}
