<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '2') {
        header('location:productos.php');
    } else {
        header('location:../../admin/productos/productos.php');
    }
} 
