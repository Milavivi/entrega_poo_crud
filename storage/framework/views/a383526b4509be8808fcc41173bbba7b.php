<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
    <h1>criar uma categoria:</h1>

    <form action="<?php echo e(route ('categorias.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="nome">nome da categoria:</label>
        <input type="text" name="nome">
        <input type="submit" value="criar">
    </form>
</body>
</html><?php /**PATH C:\wamp64\www\crudLaravel\resources\views/categorias/create.blade.php ENDPATH**/ ?>