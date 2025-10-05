<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Categorias</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    @foreach($categorias as $cat)
    <tr>
        <td>{{ $cat->nome }}</td>
        <td>
           <button type="button"><a href="{{ route('categorias.edit', $cat->id) }}">Editar</a> </button> 
            
            <form action="{{ route('categorias.destroy', $cat->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Excluir">
            </form>
        </td>
    </tr>
    @endforeach
</table>

<button type="button"><p><a href="{{ route('categorias.create') }}"> Criar nova categoria</a></p></button>

</body>
</html>