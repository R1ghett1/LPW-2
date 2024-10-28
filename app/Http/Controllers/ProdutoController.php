<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produto = Produto::with('categoria')->get();
        return view('produto.index', compact('produto'));
    }

    public function create()
    {
        $categoria = Categoria::all(); // Coletar todas as categorias
        return view('produto.create', compact('categoria')); // Passar para a view
    }

    public function store(Request $request)
    {
        // Validar os dados recebidos
        $request->validate([
            'id_categoria' => 'required|exists:categorias,id_categoria', 
            'nome_produto' => 'required|string|max:255',
            'descricao_produto' => 'required|string|max:255',
            'preco_produto' => 'required|numeric',
            'estoque_produto' => 'required|integer',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validação da imagem
        ]);

        // Salvar a imagem
        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('imagens/produtos', 'public'); // Armazena no diretório public/imagens/produtos
        }

        // Criar o produto no banco de dados
        Produto::create(array_merge($request->all(), ['imagem' => $imagemPath])); // Armazena o caminho da imagem
        return redirect()->route('produto.index')->with('success', 'Produto criado com sucesso!');
    }

    public function show(Produto $produto)
    {
        return view('produto.show', compact('produto'));
    }

    public function edit(Produto $produto)
    {
        $categoria = Categoria::all();
        return view('produto.edit', compact('produto', 'categoria'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'id_categoria' => 'required|exists:categorias,id_categoria',
            'nome_produto' => 'required|string|max:255',
            'descricao_produto' => 'required|string|max:255',
            'preco_produto' => 'required|numeric',
            'estoque_produto' => 'required|integer',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        // Atualizar os dados do produto
        $data = $request->all();
    
        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('imagens/produtos', 'public');
            $data['imagem'] = $path; }
    
        $produto->update($data);
        return redirect()->route('produto.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produto.index')->with('success', 'Produto removido com sucesso!');
    }
}
