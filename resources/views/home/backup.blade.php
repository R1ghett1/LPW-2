    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adornment Fitness - Loja de Produtos Fitness</title>
        <link rel="stylesheet" href="/css/adornmentStyle.css">
        <link href="/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <header>
            <div class="adorno">
                <h1>Adornment Fitness</h1>
            </div>
            <nav>
                <ul class="menu-navegacao">
                    <li><a href="{{route('home.index') }}">Home</a></li>
                    <li><a href="{{route('home.produtos') }}">Produtos</a></li>
                    <li><a href="{{route('home.sobre-nos')}}">Sobre Nós</a></li>
                    <li><a href="{{route('contato.enviar')}}">Contato</a></li>
                    <li><a href="{{route('carrinho.index')}}">Carrinho</a></li>
                </ul>
                <div class="login-icon">
                    <a href="{{route('register')}}">
                        <img src="/assets/img/iconePerfil.png" alt="Perfil">
                    </a>
                </div>
            </nav>
        </header>
        
        @yield('conteudo')  

        <footer>
            <p>&copy; 2024 Adornment Fitness. Todos os direitos reservados.</p>
        </footer>
    </body>
    </html>