<?php 
use Illuminate\Support\Facades\Auth;
if (Auth::check()){

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Base</title>
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />  
</head>
<body>
  <div class="container">
    <?php echo $__env->yieldContent('main'); ?>
  </div>
  <script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<?php 
}
else
{
	?>
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
<?php 
} ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/base.blade.php ENDPATH**/ ?>