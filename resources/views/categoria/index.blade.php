@extends('admin_template.index')

@section ('conteudo')
    <main>     
        <div class="container mt-5">
            <h2>Tabela de Categoria</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Categoria</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categoria as $categoria)
                        <tr>
                            <td>{{ $categoria->nome_categoria }}</td>
                            <td>
                                <!-- Botão de Editar -->
                                <a href="{{ route('categoria.edit', $categoria->id_categoria) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

                                <form action="{{ route('categoria.destroy', $categoria->id_categoria) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('categoria.create') }}" class="btn btn-success">Criar Categoria</a>
        </div>
    </main>  
@endsection

