<?php $__env->startSection('main'); ?>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lista de ventas</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>ID</td>
			      <td>Cliente</td>
			      <td>Empleado que realizó la venta</td>
			      <td>Fecha de la venta</td>
			      <td>Monto total de la venta</td>
			      <td>Accion</td>
			    </tr>
			</thead>
			<tbody>
			    <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <tr>
			        <td><?php echo e($venta->id); ?></td>
			        <td><?php echo e($venta->cliente->nombre); ?></td>
			        <td><?php echo e($venta->usuario->nombre); ?></td>
			        <td id="proveedorTd"><?php echo e($venta->fecha_venta); ?></td>
			        <td><?php echo e($venta->total); ?></td>
			        <td ><a href="<?php echo e(route('generar-pdf', $venta->id)); ?>">Imprimir factura</a></td>
			    </tr>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
    </div>
<div>
</div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	$( document ).ready(function() {
	    
	});
	
</script>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/ventas/lista.blade.php ENDPATH**/ ?>