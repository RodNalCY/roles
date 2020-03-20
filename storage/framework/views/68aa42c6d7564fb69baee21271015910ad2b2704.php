<div class="form-group">
  <?php echo e(Form::label('name', 'Nombre del Producto')); ?>

  <?php echo e(Form::text('name', null, ['class' => 'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('description', 'Nombre del Producto')); ?>

  <?php echo e(Form::text('description', null, ['class' => 'form-control'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::submit('Guardar', null, ['class' => 'form-control'])); ?>

  </div><?php /**PATH D:\laragon\www\roles\resources\views/products/partials/form.blade.php ENDPATH**/ ?>