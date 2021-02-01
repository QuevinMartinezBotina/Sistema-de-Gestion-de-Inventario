<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '1') {
        header('location:movimientos.php');
    } else {
        header('location:../../empleado/movimientos/movimientos.php');
    }
} 
