<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
     <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <h1>Categorias</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($cat->nome); ?></td>
        <td>
           <button type="button"><a href="<?php echo e(route('categorias.edit', $cat->id)); ?>">Editar</a> </button> 
            
            <form action="<?php echo e(route('categorias.destroy', $cat->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input type="submit" value="Excluir">
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<button type="button"><p><a href="<?php echo e(route('categorias.create')); ?>"> Criar nova categoria</a></p></button>

</body>
</html><?php /**PATH C:\wamp64\www\crudLaravel\resources\views/categorias/index.blade.php ENDPATH**/ ?>