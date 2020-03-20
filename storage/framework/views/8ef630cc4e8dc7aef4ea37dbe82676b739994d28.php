<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">                    
                   Producto
                </div>
                <div class="card-body">
                    <p><strong>Nombre: </strong><?php echo e($product->name); ?></p>

                    <p><strong>Descripción: </strong> <?php echo e($product->description); ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\roles\resources\views/products/show.blade.php ENDPATH**/ ?>