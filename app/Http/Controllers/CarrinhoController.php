<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\ItensPedido;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{

    public function index()
{
    // Obtém o ID do usuário autenticado
    $idusuario = Auth::id();

    // Procura por um pedido com status "RE" (provavelmente reservado ou em andamento)
    // para o usuário autenticado
    $pedido = Pedido::where([
        'id_usuario' => $idusuario, // substitua para 'id' na tabela users se necessário
        'status' => 'RE'
    ])->first();

    // Se não houver pedido correspondente, exibe a view 'home.carrinho' com mensagem de carrinho vazio
    if (!$pedido) {
        return view('home.carrinho', ['itens' => [], 'mensagem' => 'Seu carrinho está vazio.']);
    }

    // Recupera os itens do pedido com o relacionamento 'produto' para exibir os detalhes do produto
    $itens = ItensPedido::with('produto')->where('id_pedido', $pedido->id_pedido)->get();

    // Retorna a view 'home.carrinho' passando a lista de itens encontrados no pedido
    return view('home.carrinho', compact('itens'));
}


    public function update(Request $request, ItensPedido $item)
{
    $request->validate([
        'quantidade' => 'required|integer|min:1',
    ]);

    $item->update([
        'quantidade' => $request->quantidade,
    ]);

    return redirect()->route('carrinho.index')->with('mensagem', 'Quantidade atualizada com sucesso.');
}


    public function destroy(ItensPedido $item)
    {
        $item->delete(); 
        return redirect()->route('carrinho.index')->with('mensagem', 'Produto removido do carrinho.');
    }
}