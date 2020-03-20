<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Usuarios                
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td width="10px">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.show')): ?>
                                        <a href="<?php echo e(route('users.show', $user->id)); ?>" class="btn btn-sm btn-secondary">
                                        Ver</a>
                                    <?php endif; ?>
                                    </td>
                                    
                                    <td width="10px">
                                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.edit')): ?>
                                          <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-sm btn-warning">
                                        Editar</a>
                                      <?php endif; ?>
                                    </td>
                                    
                                    <td width="10px">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.destroy')): ?>
                                        <?php echo Form::open(['route'=> ['users.destroy', $user->id], 'method' => 'DELETE']); ?>

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
                    <?php echo e($users->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\roles\resources\views/users/index.blade.php ENDPATH**/ ?>