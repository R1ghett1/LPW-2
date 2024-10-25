@extends('admin_template.index')

@section ('conteudo')
        <div id="event-create-container" class="col-md-6 offset-md-3">
            <h1>Criar Categoria</h1>  
            <form action="{{ route('categoria.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome_categoria">Categoria:</label>
                    <input type="text" class="form-control" id="nome_categoria" name="nome_categoria" placeholder="Nome da categoria">
                </div>

                <br>
                    <input type="submit" class="btn btn-success" value="Criar Categoria">     
            </form>
        </div>

@endsection


