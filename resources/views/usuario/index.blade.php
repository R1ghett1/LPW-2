@extends('admin_template.index')

@section ('conteudo')
        <main>     
        <div class="container mt-5">
            <h2>Tabela de Usuários</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Data da Criação</th>
                            <th scope="col">Opções</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach($usuario as $usuario)
                    <tr>
                        <td>{{$usuario->nome_usuario}}</td>
                        <td>{{$usuario->email_usuario}}</td>
                        <td>{{$usuario->senha_usuario}}</td>
                        <td>{{$usuario->tipo_usuario}}</td>
                        <td>{{$usuario->created_at}}</td>
                        <td>
                            <a href="{{ route('usuario.edit', $usuario->id_usuario) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

                            <form action="{{ route('usuario.destroy', $usuario->id_usuario) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                        @endforeach
                </tbody>
            </table>
            <a href="/usuario/create" class="btn btn-success">Criar Usuário</a>
        </div>
    </main>  
@endsection 
