<div class="form-group">
    <?php echo e(Form::label('name', 'Nombre')); ?>

    <?php echo e(Form::text('name', null, ['class' => 'form-control'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('slug', 'URL amigable')); ?>

    <?php echo e(Form::text('slug', null, ['class' => 'form-control'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('description', 'Descripción')); ?>

    <?php echo e(Form::textarea('description', null, ['class' => 'form-control'])); ?>

</div>

<h3>Permiso Especial</h3>
<div class="form-group">
    <label> <?php echo e(Form::radio('special', 'all-access')); ?> Acceso Total</label>
    <label> <?php echo e(Form::radio('special', 'no-access')); ?> Ningún Acceso</label>
</div>
<hr>

  <h3> Lista de Permisos</h3>
  <div class="form-group">
    <ul class="list-unstyled">
        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <label>
              <?php echo e(Form::checkbox('permissions[]', $permission->id, null)); ?>

              <?php echo e($permission->name); ?>

              <em>(<?php echo e($permission->description ?: 'N/A'); ?>)</em>
            </label>
        </li>          
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  
  <div class="form-group">
      <?php echo e(Form::submit('Guardar', null, ['class' => 'form-control'])); ?>

    </div><?php /**PATH D:\laragon\www\roles\resources\views/roles/partials/form.blade.php ENDPATH**/ ?>