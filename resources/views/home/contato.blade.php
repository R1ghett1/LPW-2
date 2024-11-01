@extends('home.backup')

@section('conteudo')

<div id="contato-container" class="col-md-6 offset-md-3">
    <h1>Entre em Contato Conosco</h1>  
    <p>Se você tiver alguma dúvida ou precisar de assistência, sinta-se à vontade para nos contatar através dos meios abaixo.</p>

    <div class="informacoes mb-4">
        <h3>Informações de Contato</h3>
        <p><strong>Email:</strong> <a href="mailto:contato@adornmentfitness.com.br">contato@adornmentfitness.com.br</a></p>
        <p><strong>Telefone:</strong> <a href="tel:+5514991955393">(14) 99195-5393</a></p>
    </div>

    <form action="{{ route('contato.enviar') }}" method="POST" class="contato-form">
        @csrf

        <div class="form-group">
            <label for="nome" class="p">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="email" class="p">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="telefone" class="p">Telefone:</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" required>
        </div>

        <div class="form-group">
            <label for="mensagem" class="p">Mensagem:</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
        </div>

        <br>
        <div class="form-buttons">
            <a href="/" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-success" value="Enviar Mensagem">
        </div>
    </form>    
</div>
@endsection
