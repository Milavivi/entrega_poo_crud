<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>editar uma categoria:</h1>

    <form action="{{route ('categorias.update', $categorias->id)}}" method="post">
        @method("put")
        @csrf
        <label for="nome">nome da categoria:</label>
        <input type="text" name="nome" value="{{ $categorias->nome }}">
        <input type="submit" value="editar">
    </form>
</body>
</html>