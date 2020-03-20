<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Roles
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.create')): ?>
                      <a href="<?php echo e(route('roles.create')); ?>"
                         class="btn btn-sm btn-primary" style="float:right">
                        Crear
                        </a>
                    <?php endif; ?>
                
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Role</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($rol->id); ?></td>
                                    <td><?php echo e($rol->name); ?></td>
                                    <td width="10px">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.show')): ?>
                                        <a href="<?php echo e(route('roles.show', $rol->id)); ?>" class="btn btn-sm btn-secondary">
                                        Ver</a>
                                    <?php endif; ?>
                                    </td>
                                    
                                    <td width="10px">
                                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.edit')): ?>
                                          <a href="<?php echo e(route('roles.edit', $rol->id)); ?>" class="btn btn-sm btn-warning">
                                        Editar</a>
                                      <?php endif; ?>
                                    </td>
                                    
                                    <td width="10px">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.destroy')): ?>
                                        <?php echo Form::open(['route'=> ['roles.destroy', $rol->id], 'method' => 'DELETE']); ?>

                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                        <?php echo Form::close(); ?>

                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>
                    <?php echo e($roles->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\roles\resources\views/roles/index.blade.php ENDPATH**/ ?>