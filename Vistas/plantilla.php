<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Farmacia San Rafael</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="Vistas/img/plantilla/logo-min.png">
  <!--=====================================
=            Plugins CSS            =
======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="Vistas/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/dist/css/AdminLTE.css">

  <!-- AdminLTE Skins. -->
  <link rel="stylesheet" href="Vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<!--=====================================
=            Plugins JS            =
======================================-->




  <!-- jQuery 3 -->
  <script src="Vistas/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap 3.3.7 -->
  <script src="Vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


  <!-- FastClick -->
  <script src="Vistas/bower_components/fastclick/lib/fastclick.js"></script>

  <!-- AdminLTE App -->
  <script src="Vistas/dist/js/adminlte.min.js"></script>

  


</head>
<!--=====================================
=            Cuerpo            =
======================================-->


<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">



  <?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

    echo '<div class="wrapper">';

  /*=============================================
  =            Encabezado           =
  =============================================*/
  
  include "modulos/encabezado.php";

  /*=============================================
  =            Menu           =
  =============================================*/

  include "modulos/menu.php";

   /*=============================================
  =            Contenido           =
  =============================================*/

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio"||
         $_GET["ruta"] == "usuarios"||
         $_GET["ruta"] == "categorias"||
         $_GET["ruta"] == "productos"||
         $_GET["ruta"] == "clientes"||
         $_GET["ruta"] == "ventas"||
         $_GET["ruta"] == "crear-venta"||
         $_GET["ruta"] == "salir"||
         $_GET["ruta"] == "reportes"){

           include "modulos/".$_GET["ruta"].".php";

      }else{

         include "modulos/404.php";  

      }
    }

 

     /*=============================================
  =            Pie de Pagina           =
  =============================================*/
  include "modulos/pie_pagina.php";


      echo '</div>';

    }else{

        include "modulos/login.php";

    }
  ?>

 

<!-- ./wrapper -->

<script src="Vistas/js/plantilla.js"></script>
</body>
</html>
