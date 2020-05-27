<?php $__env->startSection('main'); ?>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lista de clientes</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>ID</td>
			      <td>Nombre y Apellido</td>
			      <td>DNI</td>
			      <td>Fecha de nacimiento</td>
			      <td>Tarjeta</td>
			    </tr>
			</thead>
			<tbody>
			    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <tr>
			        <td><?php echo e($cliente->id); ?></td>
			        <td><?php echo e($cliente->nombre); ?> <?php echo e($cliente->apellido); ?></td>
			        <td><?php echo e($cliente->dni); ?></td>
			        <td><?php echo e($cliente->fecha_nac); ?></td>
			        <td><?php echo e(\Illuminate\Support\Str::limit($cliente->tarjeta, 10, $end='...')); ?></td>
			    </tr>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
    </div>
<div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/clientes/lista.blade.php ENDPATH**/ ?>