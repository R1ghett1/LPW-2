@extends('home.backup')

@section('conteudo')
    <style>
        body {
            background: linear-gradient(135deg, #f7f7f7, #ffffff);
            font-family: 'Lato', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .produto-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centraliza o conteúdo dentro do container */
        }
        .produto-imagem {
            max-width: 100%; /* Faz com que a imagem se ajuste ao tamanho do container */
            height: auto; /* Mantém a proporção da imagem */
            border-radius: 8px; /* Adiciona cantos arredondados à imagem */
        }
        .produto-nome {
            font-size: 24px;
            margin: 10px 0;
            color: gold; /* Cor do nome do produto */
        }
        .produto-descricao,
        .produto-preco,
        .produto-estoque,
        .produto-categoria {
            font-size: 18px;
            margin: 5px 0;
        }
        .produto-botao {
            background-color: #333;
            color: gold;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }
        .produto-botao:hover {
            background-color: #555; /* Cor do botão no hover */
        }
    </style>

    <div class="produto-container">
        <img src="/caminho/para/imagem-produto.jpg" alt="Nome do Produto" class="produto-imagem">
        <h1 class="produto-nome">Nome do Produto</h1>
        <p class="produto-descricao"><strong>Descrição:</strong> Esta é uma descrição detalhada do produto, informando sobre suas características, benefícios e uso recomendado.</p>
        <p class="produto-preco"><strong>Preço:</strong> R$ 99,99</p>
        <p class="produto-estoque"><strong>Estoque:</strong> 10 unidades disponíveis</p>
        <p class="produto-categoria"><strong>Categoria:</strong> Categoria do Produto</p>
        <input type="button" class="produto-botao" value="Adicionar ao Carrinho">
    </div>
@endsection
