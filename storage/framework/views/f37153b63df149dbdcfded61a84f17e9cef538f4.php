<?php $__env->startSection('main'); ?>
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="">Registrar nueva venta</h1>
  <div>
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
      <form method="post" action="<?php echo e(route('ventas.store')); ?>">
          <?php echo csrf_field(); ?>
          <div class="row">
			<div class="col-md-4  <?php if($errors->has('name')): ?> has-error <?php endif; ?>">
	          <div class="form-group">
	              <label for="fecha_nac">Fecha de venta</label>
	              <input type="date" class="form-control" name="fecha_venta" max="2020-05-26" required/>
	          </div>
	          <div class="form-group">
	              <label for="fecha_nac">Monto total de la venta</label>
	              <input type="number" class="form-control" name="total" min="0" required/>
	          </div>
	          <div class="form-group">
	          	  <select id="clienteSelect" name="cliente_id" class="input-100" required>
                	<option value = "" required>Elija un cliente</option>
            	  </select>
	              <!--<label for="tarjeta">Rol</label>
	              <input type="text" class="form-control" name="rol" maxlength="191" required/>-->
	          </div>
	          <div class="form-group">
	          	  <select id="rolSelect" name="rol" class="input-100" required>
                	<option value = "" required>Elija un empleado</option>
            	  </select>
	              <!--<label for="tarjeta">Rol</label>
	              <input type="text" class="form-control" name="rol" maxlength="191" required/>-->
	          </div>
	        </div>
	       </div>
          <button type="submit" class="btn btn-primary-outline">Agregar venta</button>
      </form>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/ventas/form.blade.php ENDPATH**/ ?>