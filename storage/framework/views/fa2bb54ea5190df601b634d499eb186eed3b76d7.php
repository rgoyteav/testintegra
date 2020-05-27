<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
<?php if(auth()->guard()->guest()): ?>
    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
    <?php if(Route::has('register')): ?>
        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
    <?php endif; ?>
<?php else: ?>
    <a id="navbarDropdown" class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
    </a>
    <div class="" aria-labelledby="">
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>

        </a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <?php if(Auth::user()->name == 'Admin'): ?>
                <div class="card-header">Tareas que puede realizar el usuario <?php echo e(Auth::user()->name); ?></div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    
                       <a class="dropdown-item" href="<?php echo e(route('usuarios.create')); ?>">Registrar empleado</a>
                </div>
                <?php else: ?>
                    <div class="card-header">Tareas que puede realizar el usuario <?php echo e(Auth::user()->name); ?></div>
                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                           <a class="dropdown-item" href="<?php echo e(route('clientes.create')); ?>">Registrar cliente</a>
                           <a class="dropdown-item" href="<?php echo e(route('clientes.index')); ?>">Ver clientes</a>
                           <a class="dropdown-item" href="<?php echo e(route('proveedores.create')); ?>">Registrar proveedor </a>
                           <a class="dropdown-item" href="<?php echo e(route('proveedores.index')); ?>">Ver proveedores</a>
                           <a class="dropdown-item" href="<?php echo e(route('productos.create')); ?>">Registrar producto</a>
                           <a class="dropdown-item" href="<?php echo e(route('productos.index')); ?>">Ver productos</a>
                           <a class="dropdown-item" href="<?php echo e(route('detalleventas.create')); ?>">Registrar nueva venta</a>
                           <a class="dropdown-item" href="<?php echo e(route('ventas.index')); ?>">Ver lista de ventas</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/home.blade.php ENDPATH**/ ?>