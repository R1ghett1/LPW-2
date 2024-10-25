<?php
namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Método para listar todas as categorias
    public function index()
    {
        $categoria = Categoria::all(); // Recupera todas as categorias do banco
        return view('categoria.index', compact('categoria')); // Retorna a view com as categorias
    }

    // Método para exibir o formulário de criação de uma nova categoria
    public function create()
    {
        return view('categoria.create'); // Retorna a view do formulário de criação
    }

    // Método para armazenar uma nova categoria
    public function store(Request $request)
    {
        $request->validate([
            'nome_categoria' => 'required|string|max:100',
        ]);

        Categoria::create($request->all()); 
        return redirect()->route('categoria.index')->with('success', 'Categoria criada com sucesso!');
    }

    public function show(Categoria $categoria)
    {
        return view('categoria.edit', compact('categoria'));
    }

   
    public function edit(Categoria $categoria)
    {
        return view('categoria.edit', compact('categoria')); 
    }
    
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nome_categoria' => 'required|string|max:100',
        ]);

        $categoria->update($request->all()); // Atualiza a categoria com os dados do request
        return redirect()->route('categoria.index')->with('success', 'Categoria atualizada com sucesso!'); // Redireciona para a lista de categorias com mensagem de sucesso
    }

    // Método para deletar uma categoria
    public function destroy(Categoria $categoria)
    {
        $categoria->delete(); 
        return redirect()->route('categoria.index')->with('success', 'Categoria removida com sucesso!'); // Redireciona para a lista de categorias com mensagem de sucesso
    }
}
