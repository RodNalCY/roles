<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">                    
                   Rol
                </div>
                <div class="card-body">
                    <?php echo Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT']); ?>

                    
                    <?php echo $__env->make('roles.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\roles\resources\views/roles/edit.blade.php ENDPATH**/ ?>