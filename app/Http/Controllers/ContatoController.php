<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{

    public function index()
    {
        $contatos = Contato::all();
        return view('contato.index', compact('contatos'));
    }

    public function showForm()
    {
        return view('home.contato'); // Certifique-se de que o arquivo da view existe
    }
    public function enviar(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensagem' => 'required|string',
            'telefone' => 'required|string|max:255',
        ]);

        // Armazenar os dados do contato no banco de dados
        Contato::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'mensagem' => $request->mensagem,
        ]);

    return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
}
}
