{{-- Formulário de Edição --}}
@extends('admin_template.index')

@section('conteudo')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editar Produto</h1>
    <form action="{{ route('produto.update', $produto->id_produto) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome_produto">Nome:</label>
            <input type="text" class="form-control" id="nome_produto" name="nome_produto" value="{{ $produto->nome_produto }}" required>
        </div>

        <div class="form-group">
            <label for="id_categoria">Categoria:</label>
            <select class="form-select" id="id_categoria" name="id_categoria" required>
                @foreach($categoria as $categoria)
                    <option value="{{ $categoria->id_categoria }}" {{ $produto->id_categoria == $categoria->id_categoria ? 'selected' : '' }}>
                        {{ $categoria->nome_categoria }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="descricao_produto">Descrição do Produto:</label>
            <input type="text" class="form-control" id="descricao_produto" name="descricao_produto" value="{{ $produto->descricao_produto }}" required>
        </div>

        <div class="form-group">
            <label for="preco_produto">Preço:</label>
            <input type="text" class="form-control" id="preco_produto" name="preco_produto" value="{{ $produto->preco_produto }}" required>
        </div>

        <div class="form-group">
            <label for="estoque_produto">Estoque:</label>
            <input type="number" class="form-control" id="estoque_produto" name="estoque_produto" value="{{ $produto->estoque_produto }}" required>
        </div>

        <div class="form-group">
            <label for="imagem_produto">Imagem do Produto:</label>
            <input type="file" class="form-control" id="imagem_produto" name="imagem_produto" accept="image/*">
            @if($produto->imagem_produto) <!-- Mostrar a imagem existente, se houver -->
                <img src="{{ asset('storage/' . $produto->imagem_produto) }}" alt="Imagem do Produto" class="img-thumbnail mt-2" style="max-width: 200px;">
            @endif
        </div>

        <br>
        <a href="{{ route('usuario.index') }}" class="btn btn-danger">Cancelar</a>
        <input type="submit" class="btn btn-success" value="Atualizar">
    </form>
</div>
@endsection
