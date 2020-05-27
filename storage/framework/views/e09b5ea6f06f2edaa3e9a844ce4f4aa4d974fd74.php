<?php $__env->startSection('main'); ?>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lista de productos</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>ID</td>
			      <td>Nombre</td>
			      <td>Marca</td>
			      <td>Proveedor</td>
			      <td>Fecha de vencimiento</td>
			      <td>Precio</td>
			    </tr>
			</thead>
			<tbody>
			    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <tr>
			        <td><?php echo e($producto->id); ?></td>
			        <td><?php echo e($producto->nombre); ?></td>
			        <td><?php echo e($producto->marca); ?></td>
			        <td id="proveedorTd"><?php echo e($producto->proveedor->nombre); ?></td>
			        <td><?php echo e($producto->fecha_venc); ?></td>
			        <td><?php echo e($producto->precio); ?></td>
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
	$(window).load(function() {
		$.ajax({
	        type: "GET",
	        dataType: "json",
	        url: "<?php echo e(route ('productos.obtenerNombreProveedores', 3)); ?>",
	        success: function(response)
	        {
	        	$.each(response,function(key, proveedor) {
	        		$("#proveedorTd").append(proveedor.nombre);
	        	});
	        },
	        error : function(xhr, status) {
		        alert('Disculpe, existió un problema');
		    }
	    });
	});
	
</script>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/productos/lista.blade.php ENDPATH**/ ?>