<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
    <h1>criar uma categoria:</h1>

    <form action="{{route ('categorias.store')}}" method="post">
        @csrf
        <label for="nome">nome da categoria:</label>
        <input type="text" name="nome">
        <input type="submit" value="criar">
    </form>
</body>
</html>