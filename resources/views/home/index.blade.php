@extends('home.backup')

@section('conteudo')

<div class="background-image" style="background-image: url('{{ asset('img/conjuntoVermelho.png') }}');"></div>


<main class="main-content">
    <!-- Seção de Introdução -->
    <section class="intro">
        <h2>Bem-vindo à Adornment Fitness</h2>
        <p>Nossa missão é fornecer os melhores produtos fitness, com qualidade e estilo, para quem busca performance e bem-estar.</p>
    </section>

    <div class="container">
        @foreach($produto as $produto) 
            <div class="exibicao">
                <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome_produto }}">
                <div class="info">
                    <div class="titulo">{{ $produto->nome_produto }}</div>
                    <div class="descricao">{{ $produto->descricao_produto }}</div>
                    <p class="cor">{{ $produto->categoria->nome_categoria }}</p> 
                    <a href="{{ route('home.show', $produto->id_produto) }}" class="btn btn-primary">Ver Mais</a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Seção de Contato -->
    <section id="contato" class="contato">
        <h2>Entre em Contato</h2>
        <p>Email: contato@adornmentfitness.com</p>
        <p>Telefone: (14)991955393</p>
    </section>
</main>
@endsection
