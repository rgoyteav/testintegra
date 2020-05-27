<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test de Programación - Rodrigo Goytea Vuistaz</title>

        <!-- Fonts -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!--Hoja de estilos-->
        <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <!-- Styles -->

        <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/153156/isolated/preview/9ce84f06c10bdd87608f48fc2e599661-icono-de-la-computadora-de-juego-by-vexels.png" />
    </head>
    <body>
        <div class="col-md-4">
          <div class="main">
          <aside>
            <div class="sidebar left">
              <i class="fa fa-bars barrita button-left" aria-hidden="true"></i>
              <ul class="list-sidebar bg-defoult">
                <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fas fa-user-shield"></i> <span class="nav-label"> Empleados </span> <span class="fa fa-chevron-left pull-right"></span> </a>
                  <ul class="sub-menu collapse" id="dashboard">
                    <li class="active"><a href="#">Registrar nuevo empleado</a></li>
                    <li><a href="#">Ver lista de empleados</a></li>
                  </ul>
                </li>
                <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fas fa-user-shield"></i> <span class="nav-label"> Clientes </span> <span class="fa fa-chevron-left pull-right"></span> </a>
                  <ul class="sub-menu collapse" id="dashboard">
                    <li class="active"><a href="#">Registrar nuevo cliente</a></li>
                    <li><a href="#">Ver lista de clientes</a></li>
                  </ul>
                </li>
                <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fas fa-user-shield"></i> <span class="nav-label"> Proveedores </span> <span class="fa fa-chevron-left pull-right"></span> </a>
                  <ul class="sub-menu collapse" id="dashboard">
                    <li class="active"><a href="#">Registrar nuevo proveedor</a></li>
                    <li><a href="#">Ver lista de proveedores</a></li>
                  </ul>
                </li>
                <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fas fa-user-shield"></i> <span class="nav-label"> Productos </span> <span class="fa fa-chevron-left pull-right"></span> </a>
                  <ul class="sub-menu collapse" id="dashboard">
                    <li class="active"><a href="#">Registrar nuevo producto</a></li>
                    <li><a href="#">Ver lista de productos</a></li>
                  </ul>
                </li>
                <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fas fa-user-shield"></i> <span class="nav-label"> Ventas </span> <span class="fa fa-chevron-left pull-right"></span> </a>
                  <ul class="sub-menu collapse" id="dashboard">
                    <li class="active"><a href="#">Registrar nueva venta</a></li>
                    <li><a href="#">Ver lista de ventas</a></li>
                  </ul>
                </li>
                <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fas fa-user-shield"></i> <span class="nav-label"> Facturas </span> <span class="fa fa-chevron-left pull-right"></span> </a>
                  <ul class="sub-menu collapse" id="dashboard">
                    <li><a href="#">Ver lista de facturas</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </aside>
          </div>
        </div>
        <div class="divllenado"></div>
    </body>

    <script>
      $(document).ready(function(){
        $('.button-left').click(function(){
            $('.sidebar').toggleClass('fliph');
        });

        var height = $(window).height();
        $('.divllenado').height(height);
      });
    </script>
</html>
<?php /**PATH C:\xampp\htdocs\testintegra\resources\views/menuprincipal.blade.php ENDPATH**/ ?>