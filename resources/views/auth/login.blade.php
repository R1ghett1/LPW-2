<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    <style>
        body {
            margin: 0;
            height: 100vh; 
            overflow: hidden; 
            position: relative; 
        }

        .background {
            background-image: url('{{ asset('assets/img/academia.jpg') }}'); /* Ajuste o nome do arquivo, se necessário */
            background-size: cover;
            background-position: center;
            height: 100%; /* Ocupa toda a altura */
            filter: blur(5px); /* Efeito de desfoque */
            position: absolute; /* Para cobrir o fundo */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0; /* Para ficar atrás do conteúdo */
        }

        .container {
            max-width: 600px;
            margin: 3rem auto;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.9); /* Fundo branco com opacidade */
            border-radius: 0.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative; /* Para garantir que a container fique acima do fundo desfocado */
            z-index: 1; /* Traz a container para frente */
        }

        h1 {
            text-align: center;
            color: gold;
            margin-bottom: 1.5rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 0.5rem 0;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: gold;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #555;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
        }

        p {
            text-align: center;
        }

        p a {
            color: #333;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    
    <div class="container">
        <h1>Login</h1>

        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Nome" required>
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Senha" required>
            </div>
            <div>
                <input type="password" name="password_confirmation" placeholder="Confirme a Senha" required>
            </div>
            <button type="submit">Entrar</button>
        </form>

        <p>Ainda não tem uma conta? <a href="{{ route('register') }}">Crie uma</a></p>
    </div>
</body>
</html>
