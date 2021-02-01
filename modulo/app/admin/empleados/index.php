<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '1') {
        header('location:empleados.php');
    } else {
        header('location:../../empleado/empleados/empleados.php');
    }
} 
