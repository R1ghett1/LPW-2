<?php

use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Pedido;

class PagamentoController extends Controller
{
    public function criarPagamento()
    {
        // Inicializa o Mercado Pago com o token de acesso
        SDK::setAccessToken(config('services.mercadopago.access_token'));

        // Cria uma nova preferência de pagamento
        $preference = new Preference();

        // Obter o usuário autenticado e o carrinho (itensPedido) do pedido atual
        $idusuario = Auth::id();
        $pedido = Pedido::where([
            'id_usuario' => $idusuario,
            'status' => 'RE'
        ])->first();

        if (!$pedido) {
            return redirect()->back()->with('error', 'Carrinho vazio.');
        }

        // Configura os itens do pagamento
        $items = [];
        foreach ($pedido->itensPedido as $itensPedido) {
            if ($itensPedido->produto) { // Verificação para garantir que o produto existe
                $item = new Item();
                $item->title = $itensPedido->produto->nome;
                $item->quantity = $itensPedido->quantidade;
                $item->unit_price = $itensPedido->produto->preco;
                $items[] = $item;
            }
        }

        $preference->items = $items;

        // Salva a preferência e obtém o ID de pagamento
        $preference->save();

        // Redireciona para a view de checkout com os detalhes da preferência
        return view('home.checkout', ['preference' => $preference]);
    }
}
