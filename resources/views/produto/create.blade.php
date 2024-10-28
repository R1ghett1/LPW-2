@extends('admin_template.index')

@section('conteudo')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Criar Produto</h1>  
    <form action="{{ route('produto.store') }}" method="post" enctype="multipart/form-data"> <!-- Certifique-se de ter o enctype -->
        @csrf
        <div class="form-group">
            <label for="nome_produto">Produto:</label>
            <input type="text" class="form-control" id="nome_produto" name="nome_produto" required>
        </div>
    
        <div class="form-group">
            <label for="id_categoria">Categoria:</label>
            <select class="form-select" id="id_categoria" name="id_categoria" required>
                <option value="" selected disabled>Escolha uma categoria</option>
                @foreach($categoria as $categoria)
                    <option value="{{ $categoria->id_categoria }}">{{ $categoria->nome_categoria }}</option>
                @endforeach
            </select>
        </div>
    
        <div class="form-group">
            <label for="descricao_produto">Descrição:</label>
            <input type="text" class="form-control" id="descricao_produto" name="descricao_produto" required>
        </div>
    
        <div class="form-group">
            <label for="preco_produto">Preço:</label>
            <input type="text" class="form-control" id="preco_produto" name="preco_produto" required>
        </div>
    
        <div class="form-group">
            <label for="estoque_produto">Estoque:</label>
            <input type="number" class="form-control" id="estoque_produto" name="estoque_produto" required>
        </div>
    
        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <input type="file" class="form-control" id="imagem" name="imagem" required>
        </div>
    
        <br>
        <a href="/produto" class="btn btn-danger">Cancelar Cadastro</a>
        <input type="submit" class="btn btn-success" value="Criar Produto">
    </form>    
</div>
@endsection
