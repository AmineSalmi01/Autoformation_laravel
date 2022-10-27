<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amine Salmi</title>
</head>
<body>
    
    <form method="post" action="<?php echo e(route('insert')); ?>">
        <!-- <?php echo e(csrf_field()); ?> -->
        
        <?php echo csrf_field(); ?>
        <input type="text" name="input">
        <button type="submit">Save</button>
    </form>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div> apprenants : <?php echo e($row->name); ?> </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
</body>
</html><?php /**PATH C:\xampp\htdocs\GestionDesApprenants\resources\views/index.blade.php ENDPATH**/ ?>