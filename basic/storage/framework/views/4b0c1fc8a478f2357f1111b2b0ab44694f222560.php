<?php $__currentLoopData = $promotion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
    <div> Name Promotion : <?php echo e($row->name); ?> </div>
    <div><a href="<?php echo e(url('Promotion', $row->id . '/edit')); ?>">Edit</a></div>

    <form action="<?php echo e(url('Promotion'.'/' . $row->id )); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" >DELETE</button>
    </form>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\Autoformation_laravel\basic\resources\views/search_page.blade.php ENDPATH**/ ?>