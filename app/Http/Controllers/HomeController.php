<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class HomeController extends Controller
{
    public function home() {
        $produto = Produto::with('categoria')->limit(5)->get(); // Limita a 5 produtos
        return view('home.index', compact('produto'));
    }
    
    public function produtos(){
        $produto = Produto::with('categoria')->limit(10)->get(); // Limita a 10 produtos
        $categoria = Categoria::all();
        return view('home.produtos', compact('produto', 'categoria'));
    }
    

    public function update(){
        $categoria = Categoria::all();
        return view('home.edit', compact('produto', 'categoria'));
       
    }

    public function show($id)
{
    $produto = Produto::with('categoria')->findOrFail($id);
    return view('home.show', compact('produto'));
}

}
