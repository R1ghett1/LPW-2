@extends('home.backup')

@section('conteudo')
<div class="produto-detalhes">
    <h2>{{ $produto->nome_produto }}</h2> <!-- Nome do produto -->
    <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem de {{ $produto->nome_produto }}" class="produto-imagem">

    <div class="produto-info">
        <p><strong>Descrição:</strong> {{ $produto->descricao_produto }}</p>
        <p><strong>Preço:</strong> <span class="destaque">R${{ number_format($produto->preco_produto, 2, ',', '.') }}</span></p>
        <p><strong>Categoria:</strong> <span class="destaque">{{ $produto->categoria->nome_categoria }}</span></p>
    </div>

    <form action="{{ route('carrinho.adicionar', ['id' => $produto->id_produto]) }}" method="POST" class="produto-form">
        @csrf
        <div class="quantidade-container">
            <button type="submit" class="btn-adicionar">Adicionar ao Carrinho</button>
        </div>
    </form>

    @if(session('mensagem-sucesso'))
        <div class="alert alert-success">
            {{ session('mensagem-sucesso') }}
        </div>
    @endif

    @if(session('Mensagem-Falha'))
        <div class="alert alert-danger">
            {{ session('Mensagem-Falha') }}
        </div>
    @endif
</div>
@endsection
