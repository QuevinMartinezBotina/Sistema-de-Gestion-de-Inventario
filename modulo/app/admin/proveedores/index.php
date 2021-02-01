<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '1') {
        header('location:proveedores.php');
    } else {
        header('location:../../empleado/proveedores/proveedores.php');
    }
} 
