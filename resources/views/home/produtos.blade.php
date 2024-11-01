@extends('home.backup')

@section('conteudo')

<main>
    <section class="intro">
        <h2>Conheça nossos produtos</h2>
    </section>

    <div class="container">
        @foreach($produto as $produto) 
            <div class="exibicao">
                <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome_produto }}">
                <div class="info">
                    <div class="titulo">{{ $produto->nome_produto }}</div>
                    <div class="descricao">{{ $produto->descricao_produto }}</div>
                    <p class="descricao">R${{ $produto->preco_produto}}</p> 
                    <p class="cor">Categoria: {{ $produto->categoria->nome_categoria }}</p> 
                    <a href="{{ route('home.show', $produto->id_produto) }}" class="btn btn-primary">Ver Mais</a> <!-- Roteamento para a página do produto -->
                </div>
            </div>
        @endforeach
    </div> 
</main>

@endsection
