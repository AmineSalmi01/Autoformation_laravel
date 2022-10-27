<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="content" >
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <div>
        <div> Name Promotion : <?php echo e($row->name); ?> </div>
        <div><a href="<?php echo e(url('Promotion', $row->id . '/edit')); ?>">Edit</a></div>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


</body>
</html><?php /**PATH C:\xampp\htdocs\Autoformation_laravel\standard\resources\views/index.blade.php ENDPATH**/ ?>