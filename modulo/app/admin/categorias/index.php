<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '1') {
        header('location:categorias.php');
    } else {
        header('location:../../empleado/categorias/categorias.php');
    }
} 
