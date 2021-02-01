<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '2') {
        header('location:proveedores.php');
    } else {
        header('location:../../admin/proveedores/proveedores.php');
    }
} 
