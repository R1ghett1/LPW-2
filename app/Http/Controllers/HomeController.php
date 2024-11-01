<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Pedido;
use App\Models\ItensPedido;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Método para exibir a página inicial com produtos limitados
    public function home() {
        $produto = Produto::with('categoria')->limit(3)->get(); // Limita a 3 produtos
        return view('home.index', compact('produto'));
    }
    
    // Método para exibir a lista de produtos
    public function produtos(){
        $produto = Produto::with('categoria')->limit(10)->get(); // Limita a 10 produtos
        $categoria = Categoria::all();
        return view('home.produtos', compact('produto', 'categoria'));
    }
    
    // Método para exibir a página de edição (não utilizado)
    public function update(){
        $categoria = Categoria::all();
        return view('home.edit', compact('produto', 'categoria'));
    }

    // Método para exibir os detalhes de um produto específico
    public function show($id)
    {
        $produto = Produto::with('categoria')->findOrFail($id);
        return view('home.show', compact('produto'));
    }

    // Método para exibir a página "Sobre Nós"
    public function sobreNos() {
        return view('home.sobre-nos');
    }

    public function adicionar($id) {
        $idusuario = Auth::id(); 
        $produto = Produto::find($id);
    
        // Consulta o pedido em aberto ('RE') para o usuário logado
        $idpedido = Pedido::where([
            'id_usuario' => $idusuario, 
            'status' => 'RE'
        ])->value('id_pedido');

        // Caso não exista um pedido em aberto, cria um novo pedido
        if ($idpedido == null) {
            $pedido_novo = Pedido::create([
                'id_usuario' => $idusuario, 
                'status' => 'RE'
            ]);
            $idpedido = $pedido_novo->id_pedido; // Armazena o ID do novo pedido
        }
    
        // Adiciona o produto ao pedido na tabela 'ItensPedido' com os detalhes necessários
        ItensPedido::create([
            'id_pedido' => $idpedido ?? $pedido_novo->id_pedido, // Use o ID do novo pedido, se criado
            'id_produto' => $id,
            'preco_unitario' => $produto->preco_produto,
            'quantidade' => 1,
            'status' => 'RE'
        ]);
        return redirect()->route('carrinho.index')->with('success', 'Produto adicionado ao carrinho com sucesso!');
    }
}
