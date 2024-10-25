<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class HomeController extends Controller
{
    public function home() {
        $produto = Produto::with('categoria')->get();
        return view('home.index', compact('produto'));
    }

    public function produtos(){
        $produto = Produto::with('categoria')->get(); 
        $categoria = Categoria::all();
        return view('home.produtos', compact('produto', 'categoria'));
       
    }

    public function update(){
        $categoria = Categoria::all();
        return view('home.edit', compact('produto', 'categoria'));
       
    }
}
