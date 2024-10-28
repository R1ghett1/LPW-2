@extends('home.backup')

@section('conteudo')

<main>
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
                        <a href="{{ route('home.show', $produto->id_produto) }}" class="btn btn-primary">Ver Mais</a> <!-- Roteamento para a página do produto -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Seção Sobre Nós -->
    <section id="sobre-nos" class="sobre-nos">
        <h2>Sobre Nós</h2>
        <p>A Adornment Fitness é especializada em roupas e acessórios para o mundo fitness, oferecendo produtos que combinam qualidade, durabilidade e estilo para o seu melhor desempenho.</p>
    </section>

    <!-- Seção de Contato -->
    <section id="contato" class="contato">
        <h2>Entre em Contato</h2>
        <p>Email: contato@adornmentfitness.com</p>
        <p>Telefone: (14)991955393</p>
    </section>
</main>

@endsection
