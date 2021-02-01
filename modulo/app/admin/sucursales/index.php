<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '1') {
        header('location:sucursales.php');
    } else {
        header('location:../../empleado/sucursales/sucursales.php');
    }
} 
