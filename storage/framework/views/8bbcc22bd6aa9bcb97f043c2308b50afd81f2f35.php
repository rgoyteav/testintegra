<?php $__env->startSection('main'); ?>
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="">Registrar nuevo proveedor</h1>
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
      <form method="post" action="<?php echo e(route('proveedores.store')); ?>">
          <?php echo csrf_field(); ?>
          <div class="row">
			<div class="col-md-4  <?php if($errors->has('name')): ?> has-error <?php endif; ?>">
	          <div class="form-group">    
	              <label for="nombre">Nombre</label>
	              <input type="text" class="form-control" name="nombre" maxlength="191" required/>
	          </div>
	          <div class="form-group">
	              <label for="dni">CUIT <br> <label>
	              <input type="text" class="form-control" name="cuit" minlength="13" maxlength="13" placeholder="20-xxxxxxxx-x" pattern="\b(20|23|24|27|30|33|34)(\D)?[0-9]{8}(\D)?[0-9]" title="20-xxxxxxxx-x" required/>
	          </div>
	          <div class="form-group">
	              <label for="fecha_nac">Direccion</label>
	              <input type="text" class="form-control" name="direccion" maxlength="191" required/>
	          </div>
	          <div class="form-group">
	              <label for="tarjeta">Teléfono</label>
	              <input type="text" class="form-control" name="telefono" maxlength="191" pattern="\d{0,9}" title="Sólo números" required/>
	          </div>
	        </div>
	       </div>
          <button type="submit" class="btn btn-primary-outline">Agregar proveedor</button>
      </form>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/proveedores/form.blade.php ENDPATH**/ ?>