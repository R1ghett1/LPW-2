@extends('admin_template.index')

@section('conteudo')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editar Usuário</h1>  
    <form action="{{ route('usuario.update', $usuario->id_usuario) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome_usuario">Nome:</label>
            <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" value="{{ $usuario->nome_usuario }}" required>
        </div>

        <div class="form-group">
            <label for="email_usuario">Email:</label>
            <input type="text" class="form-control" id="email_usuario" name="email_usuario" value="{{ $usuario->email_usuario }}" required>
        </div>

        <div class="form-group">
            <label for="senha_usuario">Senha:</label>
            <input type="text" class="form-control" id="senha_usuario" name="senha_usuario" value="{{ $usuario->senha_usuario }}" required>
        </div>

        <div class="form-group">
            <label for="tipo_usuario">Tipo de usuário:</label>
            <select class="form-control" id="tipo_usuario" name="tipo_usuario" value="{{ $usuario->tipo_usuario }}"required>
                <option value="administrador">Administrador</option>
                <option value="cliente">Cliente</option>
            </select>
        </div>

        <br>
        <a href="{{ route('usuario.index')}}" class="btn btn-danger">Cancelar</a>
        <input type="submit" class="btn btn-success" value="Atualizar">    
    </form>
</div>
@endsection
