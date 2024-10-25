@extends('admin_template.index')

@section('conteudo')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Atualizar Categoria</h1>  
    <form action="{{ route('categoria.update', $categoria->id_categoria) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome_categoria">Nome:</label>
            <input type="text" class="form-control" id="nome_categoria" name="nome_categoria" value="{{ $categoria->nome_categoria }}" required>
        </div>

        <br>
        <a href="/categoria" class="btn btn-danger">Cancelar</a>
        <input type="submit" class="btn btn-success" value="Atualizar">    
    </form>
</div>
@endsection
