<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amine Salmi</title>
</head>
<body>
    
    <form method="POST" action="<?php echo e(route('Promotion.store')); ?>">
        
        <?php echo csrf_field(); ?>
        <input type="text" name="input">
        <button type="submit">Add</button>
    </form>


    
    
</body>
</html><?php /**PATH C:\xampp\htdocs\Autoformation_laravel\basic\resources\views/Form.blade.php ENDPATH**/ ?>