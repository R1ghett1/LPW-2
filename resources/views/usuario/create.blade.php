@extends('admin_template.index')

@section('conteudo')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Criar Usuário</h1>  
    <form action="{{ route('usuario.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome_usuario">Nome:</label>
            <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" required>
        </div>

        <div class="form-group">
            <label for="email_usuario">Email:</label>
            <input type="text" class="form-control" id="email_usuario" name="email_usuario" required>
        </div>

        <div class="form-group">
            <label for="senha_usuario">Senha:</label>
            <input type="password" class="form-control" id="senha_usuario" name="senha_usuario" required>
        </div>

        <div class="form-group">
            <label for="tipo_usuario">Tipo de usuário:</label>
            <select class="form-control" id="tipo_usuario" name="tipo_usuario" required>
                <option value="" selected disabled>Selecione o tipo de usuário</option>
                <option value="administrador">Administrador</option>
                <option value="cliente">Cliente</option>
            </select>
        </div>

        <br>
        <a href="/usuario" class="btn btn-danger">Cancelar Cadastro</a>
        <input type="submit" class="btn btn-success" value="Criar Usuário">     
    </form>
</div>
@endsection
