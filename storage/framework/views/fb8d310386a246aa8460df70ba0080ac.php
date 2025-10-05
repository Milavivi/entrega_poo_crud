<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
     <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <h1>editar uma categoria:</h1>

    <form action="<?php echo e(route ('categorias.update', $categorias->id)); ?>" method="post">
        <?php echo method_field("put"); ?>
        <?php echo csrf_field(); ?>
        <label for="nome">nome da categoria:</label>
        <input type="text" name="nome" value="<?php echo e($categorias->nome); ?>">
        <input type="submit" value="editar">
    </form>
</body>
</html><?php /**PATH C:\wamp64\www\crudLaravel\resources\views/categorias/edit.blade.php ENDPATH**/ ?>