<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action=" <?php echo e(route('Promotion.update', $promotion->id)); ?> " method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <input type="text" name="update_input" value="<?php echo e($promotion->name); ?>">
        <input type="submit" value="update">
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\Autoformation_laravel\standard\resources\views/edit.blade.php ENDPATH**/ ?>