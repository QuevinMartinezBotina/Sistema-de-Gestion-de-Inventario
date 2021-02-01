<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '1') {
        header('location:productos.php');
    } else {
        header('location:../../empleado/productos/productos.php');
    }
} 
