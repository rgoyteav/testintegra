<?php $__env->startSection('main'); ?>
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="">Registrar nuevo cliente</h1>
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
      <form method="post" action="<?php echo e(route('clientes.store')); ?>">
          <?php echo csrf_field(); ?>
          <div class="row">
			<div class="col-md-4  <?php if($errors->has('name')): ?> has-error <?php endif; ?>">
	          <div class="form-group">    
	              <label for="nombre">Nombre</label>
	              <input type="text" class="form-control" name="nombre" maxlength="191" required/>
	          </div>

	          <div class="form-group">
	              <label for="apellido">Apellido</label>
	              <input type="text" class="form-control" name="apellido" maxlength="191" required/>
	          </div>

	          <div class="form-group">
	              <label for="dni">DNI</label>
	              <input type="text" class="form-control" name="dni" minlength="8" maxlength="8" pattern="^[0-9]{8,8}" required/>
	          </div>
	          <div class="form-group">
	              <label for="fecha_nac">Fecha de nacimiento</label>
	              <input type="date" class="form-control" name="fecha_nac" min="1900-05-26" max="2002-05-26" required/>
	          </div>
	          <div class="form-group">
	              <label for="tarjeta">Número de tarjeta</label>
	              <input type="text" class="form-control" name="tarjeta" minlength="16" maxlength="16" pattern="^[0-9]{16,16}" required/>
	          </div>
	        </div>
	       </div>
          <button type="submit" class="btn btn-primary-outline">Agregar cliente</button>
      </form>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/clientes/form.blade.php ENDPATH**/ ?>