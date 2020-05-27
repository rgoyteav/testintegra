<?php $__env->startSection('main'); ?>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Detalles de ventas</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>#</td>
			      <td>ID de venta</td>
			      <td>Producto</td>
			      <td>Precio unitario</td>
			      <td>Cantidad</td>
			      <td>Subtotal</td>
			    </tr>
			</thead>
			<tbody>
			    <?php $__currentLoopData = $detalleVentas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalleVenta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <tr>
			        <td><?php echo e($detalleVenta->id); ?></td>
			        <td><?php echo e($detalleVenta->venta_id); ?></td>
			        <td><?php echo e($detalleVenta->producto->nombre); ?></td>
			        <td id="proveedorTd"><?php echo e($detalleVenta->precio_unitario); ?></td>
			        <td><?php echo e($detalleVenta->cantidad); ?></td>
			        <td><?php echo e($detalleVenta->subtotal); ?></td>
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

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/detalleVentas/lista.blade.php ENDPATH**/ ?>