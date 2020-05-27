<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test de Programación - Rodrigo Goytea Vuistaz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Styles -->
        <style>
            html {
              background-color: #56baed;
            }

            body {
              font-family: "Poppins", sans-serif;
              height: 100vh;
            }

            a {
              color: #92badd;
              display:inline-block;
              text-decoration: none;
              font-weight: 400;
            }

            h2 {
              text-align: center;
              font-size: 16px;
              font-weight: 600;
              text-transform: uppercase;
              display:inline-block;
              margin: 40px 8px 10px 8px; 
              color: #cccccc;
            }



            /* STRUCTURE */

            .wrapper {
              display: flex;
              align-items: center;
              flex-direction: column; 
              justify-content: center;
              width: 100%;
              min-height: 100%;
              padding: 20px;
            }

            #formContent {
              -webkit-border-radius: 10px 10px 10px 10px;
              border-radius: 10px 10px 10px 10px;
              background: #fff;
              padding: 30px;
              width: 90%;
              max-width: 450px;
              position: relative;
              padding: 0px;
              -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
              box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
              text-align: center;
            }

            #formFooter {
              background-color: #f6f6f6;
              border-top: 1px solid #dce8f1;
              padding: 25px;
              text-align: center;
              -webkit-border-radius: 0 0 10px 10px;
              border-radius: 0 0 10px 10px;
            }



            /* TABS */

            h2.inactive {
              color: #cccccc;
            }

            h2.active {
              color: #0d0d0d;
              border-bottom: 2px solid #5fbae9;
            }



            /* FORM TYPOGRAPHY*/

            input[type=button], input[type=submit], input[type=reset]  {
              background-color: #56baed;
              border: none;
              color: white;
              padding: 15px 80px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              text-transform: uppercase;
              font-size: 13px;
              -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
              box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
              -webkit-border-radius: 5px 5px 5px 5px;
              border-radius: 5px 5px 5px 5px;
              margin: 5px 20px 40px 20px;
              -webkit-transition: all 0.3s ease-in-out;
              -moz-transition: all 0.3s ease-in-out;
              -ms-transition: all 0.3s ease-in-out;
              -o-transition: all 0.3s ease-in-out;
              transition: all 0.3s ease-in-out;
            }

            input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
              background-color: #39ace7;
            }

            input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
              -moz-transform: scale(0.95);
              -webkit-transform: scale(0.95);
              -o-transform: scale(0.95);
              -ms-transform: scale(0.95);
              transform: scale(0.95);
            }

            input[type=text], input[type=password] {
              background-color: #f6f6f6;
              border: none;
              color: #0d0d0d;
              padding: 15px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 5px;
              width: 85%;
              border: 2px solid #f6f6f6;
              -webkit-transition: all 0.5s ease-in-out;
              -moz-transition: all 0.5s ease-in-out;
              -ms-transition: all 0.5s ease-in-out;
              -o-transition: all 0.5s ease-in-out;
              transition: all 0.5s ease-in-out;
              -webkit-border-radius: 5px 5px 5px 5px;
              border-radius: 5px 5px 5px 5px;
            }

            input[type=text]:focus {
              background-color: #fff;
              border-bottom: 2px solid #5fbae9;
            }

            input[type=text]:placeholder {
              color: #cccccc;
            }



            /* ANIMATIONS */

            /* Simple CSS3 Fade-in-down Animation */
            .fadeInDown {
              -webkit-animation-name: fadeInDown;
              animation-name: fadeInDown;
              -webkit-animation-duration: 1s;
              animation-duration: 1s;
              -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
            }

            @-webkit-keyframes fadeInDown {
              0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
              }
              100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
              }
            }

            @keyframes  fadeInDown {
              0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
              }
              100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
              }
            }

            /* Simple CSS3 Fade-in Animation */
            @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
            @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
            @keyframes  fadeIn { from { opacity:0; } to { opacity:1; } }

            .fadeIn {
              opacity:0;
              -webkit-animation:fadeIn ease-in 1;
              -moz-animation:fadeIn ease-in 1;
              animation:fadeIn ease-in 1;

              -webkit-animation-fill-mode:forwards;
              -moz-animation-fill-mode:forwards;
              animation-fill-mode:forwards;

              -webkit-animation-duration:1s;
              -moz-animation-duration:1s;
              animation-duration:1s;
            }

            .fadeIn.first {
              -webkit-animation-delay: 0.4s;
              -moz-animation-delay: 0.4s;
              animation-delay: 0.4s;
            }

            .fadeIn.second {
              -webkit-animation-delay: 0.6s;
              -moz-animation-delay: 0.6s;
              animation-delay: 0.6s;
            }

            .fadeIn.third {
              -webkit-animation-delay: 0.8s;
              -moz-animation-delay: 0.8s;
              animation-delay: 0.8s;
            }

            .fadeIn.fourth {
              -webkit-animation-delay: 1s;
              -moz-animation-delay: 1s;
              animation-delay: 1s;
            }

            /* Simple CSS3 Fade-in Animation */
            .underlineHover:after {
              display: block;
              left: 0;
              bottom: -10px;
              width: 0;
              height: 2px;
              background-color: #56baed;
              content: "";
              transition: width 0.2s;
            }

            .underlineHover:hover {
              color: #0d0d0d;
            }

            .underlineHover:hover:after{
              width: 100%;
            }



            /* OTHERS */

            *:focus {
                outline: none;
            } 

            #icon {
              width:60%;
            }
        </style>

        <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/153156/isolated/preview/9ce84f06c10bdd87608f48fc2e599661-icono-de-la-computadora-de-juego-by-vexels.png" />
    </head>
    <body>
        <div class="main">
            <aside>
              <div class="sidebar left ">
                <div class="user-panel">
                  <div class="pull-left image">
                    <img src="http://via.placeholder.com/160x160" class="rounded-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                    <p>bootstrap develop</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
                </div>
                <ul class="list-sidebar bg-defoult">
                  <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Dashboards </span> <span class="fa fa-chevron-left pull-right"></span> </a>
                  <ul class="sub-menu collapse" id="dashboard">
                    <li class="active"><a href="#">CSS3 Animation</a></li>
                    <li><a href="#">General</a></li>
                    <li><a href="#">Buttons</a></li>
                    <li><a href="#">Tabs & Accordions</a></li>
                    <li><a href="#">Typography</a></li>
                    <li><a href="#">FontAwesome</a></li>
                    <li><a href="#">Slider</a></li>
                    <li><a href="#">Panels</a></li>
                    <li><a href="#">Widgets</a></li>
                    <li><a href="#">Bootstrap Model</a></li>
                  </ul>
                </li>
                <li> <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a> </li>
                <li> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span> <span class="fa fa-chevron-left pull-right"></span> </a>
                <ul class="sub-menu collapse" id="products">
                  <li class="active"><a href="#">CSS3 Animation</a></li>
                  <li><a href="#">General</a></li>
                  <li><a href="#">Buttons</a></li>
                  <li><a href="#">Tabs & Accordions</a></li>
                  <li><a href="#">Typography</a></li>
                  <li><a href="#">FontAwesome</a></li>
                  <li><a href="#">Slider</a></li>
                  <li><a href="#">Panels</a></li>
                  <li><a href="#">Widgets</a></li>
                  <li><a href="#">Bootstrap Model</a></li>
                </ul>
              </li>
              <li> <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a> </li>
              <li> <a href="#" data-toggle="collapse" data-target="#tables" class="collapsed active" ><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa fa-chevron-left pull-right"></span></a>
              <ul  class="sub-menu collapse" id="tables" >
                <li><a href=""> Static Tables</a></li>
                <li><a href=""> Data Tables</a></li>
                <li><a href=""> Foo Tables</a></li>
                <li><a href=""> jqGrid</a></li>
              </ul>
            </li>
            <li> <a href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active" ><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa fa-chevron-left pull-right"></span></a>
            <ul  class="sub-menu collapse" id="e-commerce" >
              <li><a href=""> Products grid</a></li>
              <li><a href=""> Products list</a></li>
              <li><a href="">Product edit</a></li>
              <li><a href=""> Product detail</a></li>
              <li><a href="">Cart</a></li>
              <li><a href=""> Orders</a></li>
              <li><a href=""> Credit Card form</a> </li>
            </ul>
          </li>
          <li> <a href=""><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span> </a></li>
          <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
          <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
          <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
          <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
          <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
        </ul>
        </div>
        </aside>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\testintegra\resources\views/menuempleado.blade.php ENDPATH**/ ?>