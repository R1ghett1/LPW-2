@extends('home.backup')

@section('conteudo')

<main>
    <div class="container">
        @foreach($produto as $produto)
            <div class="exibicao">
                <img src="/assets/img/conjuntoVermelho.png">
                <div class="info">
                    <p class="titulo">{{ $produto->nome_produto }}</p>                                
                    <p class="descricao">{{ $produto->descricao_produto}}</p>
                    <p class="cor">{{ $produto->categoria->nome_categoria }}</p>
                    <input type="button" value="R$ {{ number_format($produto->preco_produto, 2, ',', '.') }}" class="preco-btn">
                </div>
            </div>
        @endforeach
    </div>    
</main>

@endsection
