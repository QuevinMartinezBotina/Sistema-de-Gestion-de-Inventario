<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '2') {
        header('location:movimientos.php');
    } else {
        header('location:../../admin/movimientos/movimientos.php');
    }
} 
