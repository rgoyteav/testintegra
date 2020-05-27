<?php $__env->startSection('main'); ?>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lista de proveedores</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>ID</td>
			      <td>Nombre</td>
			      <td>CUIT</td>
			      <td>Dirección</td>
			      <td>Teléfono</td>
			    </tr>
			</thead>
			<tbody>
			    <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <tr>
			        <td><?php echo e($proveedor->id); ?></td>
			        <td><?php echo e($proveedor->nombre); ?></td>
			        <td><?php echo e($proveedor->CUIT); ?></td>
			        <td><?php echo e($proveedor->direccion); ?></td>
			        <td><?php echo e($proveedor->telefono); ?></td>
			    </tr>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
    </div>
<div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/proveedores/lista.blade.php ENDPATH**/ ?>