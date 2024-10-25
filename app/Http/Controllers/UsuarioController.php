<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function show()
    {
        $usuario = Usuario::where('tipo_usuario', 'administrador')->get();
        return view('usuario.index', compact('usuario')); // Retorna a view com os administradores
    }

    public function index()
    {          
        $usuario = Usuario::where('tipo_usuario', 'cliente')->get();
        return view('usuario.index', compact('usuario')); // Retorna a view com os usuários
    }

    // Método para exibir o formulário de criação de uma novo usuário
    public function create()
    {
        return view('usuario.create'); // Retorna a view do formulário de usuários
    }

    // Método para armazenar uma nova usuários
    public function store(Request $request)
    {
        $request->validate([
            'nome_usuario' => 'required|string|max:255',
            'email_usuario' => 'required|string|max:100', 
            'senha_usuario' => 'required|string|max:100',
            'tipo_usuario' => 'required|string|max:100',
        ]);

        Usuario::create($request->all()); 
        return redirect()->route('usuario.index')->with('success', 'Usuário criada com sucesso!');
    }
    // Método para mostrar o formulário de edição de uma categoria
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit', compact('usuario')); // Retorna a view de edição com a categoria selecionada
    }

    // Método para atualizar uma categoria existente
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nome_usuario' => 'required|string|max:255',
            'email_usuario' => 'required|string|max:100', 
            'senha_usuario' => 'required|string|max:100',
            'tipo_usuario' => 'required|string|max:100',
        ]);

        $usuario->update($request->all()); // Atualiza a categoria com os dados do request
        return redirect()->route('usuario.index')->with('success', 'Usuario atualizada com sucesso!'); // Redireciona para a lista de categorias com mensagem de sucesso
    }

    // Método para deletar uma categoria
    public function destroy(Usuario $usuario)
    {
        $usuario->delete(); // Deleta a categoria
        return redirect()->route('usuario.index')->with('success', 'Usuário removida com sucesso!'); // Redireciona para a lista de categorias com mensagem de sucesso
    }
}
