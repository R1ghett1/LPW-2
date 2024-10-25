@extends('home.backup')

@section('conteudo')

    <main>
        <!-- Seção de Introdução -->
        <section class="intro">
            <h2>Bem-vindo à Adornment Fitness</h2>
            <p>Nossa missão é fornecer os melhores produtos fitness, com qualidade e estilo, para quem busca performance e bem-estar.</p>
        </section>

            <div class="container">
                <div class="exibicao">
                    <img src="/assets/img/conjuntoVermelho.png" alt="Conjunto Fitness Vermelho">
                    <div class="info">
                        <div class="titulo">Conjunto Fitness Vermelho</div>
                        <div class="descricao">Conforto e estilo para os seus treinos.</div>
                        <div class="cor">Cor: Vermelho</div>
                        <input type="button" value="Ver Mais">
                    </div>
                </div>

                <div class="exibicao">
                    <img src="/assets/img/conjuntoRoxo.png" alt="Conjunto Fitness Vermelho">
                    <div class="info">
                        <div class="titulo">Conjunto Fitness Vermelho</div>
                        <div class="descricao">Conforto e estilo para os seus treinos.</div>
                        <div class="cor">Cor: Vermelho</div>
                        <input type="button" value="Ver Mais">
                    </div>
                </div>

                <div class="exibicao">
                    <img src="/assets/img/conjuntoRoxo.png" alt="Conjunto Fitness Vermelho">
                    <div class="info">
                        <div class="titulo">Conjunto Fitness Vermelho</div>
                        <div class="descricao">Conforto e estilo para os seus treinos.</div>
                        <div class="cor">Cor: Vermelho</div>
                        <input type="button" value="Ver Mais">
                    </div>
                </div>
                
                <div class="exibicao">
                    <img src="/assets/img/conjuntoVermelho.png" alt="Conjunto Fitness Rosa">
                    <div class="info">
                        <div class="titulo">Conjunto Fitness Rosa</div>
                        <div class="descricao">Estilo e durabilidade para o seu treino.</div>
                        <div class="cor">Cor: Rosa</div>
                        <input type="button" value="Ver Mais">
                    </div>
                </div>

                <div class="exibicao">
                    <img src="/assets/img/conjuntoRoxo.png" alt="Conjunto Fitness Roxo">
                    <div class="info">
                        <div class="titulo">Conjunto Fitness Roxo</div>
                        <div class="descricao">Desempenho e conforto garantidos.</div>
                        <div class="cor">Cor: Roxo</div>
                        <input type="button" value="Ver Mais">
                    </div>
                </div>

            </div>
        </section>

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
</body>
</html>

@endsection

