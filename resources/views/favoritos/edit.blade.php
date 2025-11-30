<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
    
@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


   <h1>Editar Favorito</h1>
   
   <form action="{{ route('favoritos.update', $favorito->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" value="{{ $favorito->usuario }}" required>
    </div>

    <div>
        <label for="titulo">Título do Favorito:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $favorito->titulo }}" required>
    </div>

    <div>
        <input type="submit" value="Atualizar">
    </div>
</form>
</body>
</html>