<div class="form-group">
  <?php echo e(Form::label('name', 'Nombre')); ?>

  <?php echo e(Form::text('name', null, ['class' => 'form-control'])); ?>

</div>

<h3> Lista de Roles</h3>
<div class="form-group">
  <ul class="list-unstyled">
      <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li>
          <label>
            <?php echo e(Form::checkbox('roles[]', $role->id, null)); ?>

            <?php echo e($role->name); ?>

            <em>(<?php echo e($role->description ?: 'N/A'); ?>)</em>
          </label>
      </li>          
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
</div>

<div class="form-group">
    <?php echo e(Form::submit('Guardar', null, ['class' => 'form-control'])); ?>

  </div><?php /**PATH D:\laragon\www\roles\resources\views/users/partials/form.blade.php ENDPATH**/ ?>