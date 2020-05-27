<?php $__env->startSection('main'); ?>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lista de usuarios</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>ID</td>
			      <td>Nombre y Apellido</td>
			      <td>Nombre de Usuario</td>
			      <td>DNI</td>
			      <td>Fecha de nacimiento</td>
			      <td>Rol</td>
			    </tr>
			</thead>
			<tbody>
			    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <tr>
			        <td><?php echo e($usuario->id); ?></td>
			        <td><?php echo e($usuario->nombre); ?>  <?php echo e($usuario->apellido); ?></td>
			        <td><?php echo e($usuario->nombreusuario); ?></td>
			        <td><?php echo e($usuario->dni); ?></td>
			        <td><?php echo e($usuario->fecha_nac); ?></td>
			        <td><?php echo e($usuario->rol); ?></td>
			    </tr>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
    </div>
<div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/usuarios/lista.blade.php ENDPATH**/ ?>