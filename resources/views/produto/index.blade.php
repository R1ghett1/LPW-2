{{-- Tabela de Produtos --}}
@extends('admin_template.index')

@section('conteudo')
<main>
    <div class="container mt-5">
        <h2>Tabela de Produtos</h2>
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descrição do Produto</th>
                    <th scope="col">Preço do Produto</th>
                    <th scope="col">Estoque do Produto</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produto as $produto)
                <tr>
                    <td>
                        <img src="{{ Storage::url($produto->imagem) }}" alt="{{ $produto->nome_produto }}" style="width: 100px; height: auto;"> <!-- Exibe a imagem do produto -->
                    </td>
                    <td>{{ $produto->nome_produto }}</td>
                    <td>{{ $produto->categoria->nome_categoria }}</td>
                    <td>{{ $produto->descricao_produto }}</td>
                    <td>R${{ number_format($produto->preco_produto, 2, ',', '.') }}</td> <!-- Formatação do preço -->
                    <td>{{ $produto->estoque_produto }}</td>
                    <td>
                        <a href="{{ route('produto.edit', $produto->id_produto) }}" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('produto.destroy', $produto->id_produto) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('produto.create') }}" class="btn btn-success">Criar Produto</a>
    </div>
</main>
@endsection
