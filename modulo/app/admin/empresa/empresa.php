<?php
session_start();
require_once '../../../../helper/validar-sesion.php';

validarSesion('1');

/* Le decimos que si hay uan sesión, que no lo deje salir de contenido */
if (isset($_SESSION['usuario'])) {
    require_once 'indexempresa.php';
} else {/* pero si no hay uan sesión que lo mande a login */
    header('location:login.php');
}