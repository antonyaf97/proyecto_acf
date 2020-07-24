<?php

require_once "Controladores/plantilla.controlador.php";
require_once "Controladores/usuarios.controlador.php";
require_once "Controladores/categorias.controlador.php";
require_once "Controladores/productos.controlador.php";
require_once "Controladores/clientes.controlador.php";
require_once "Controladores/ventas.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();