<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '2') {
        header('location:sucursales.php');
    } else {
        header('location:../../admin/sucursales/sucursales.php');
    }
} 
