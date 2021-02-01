<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '1') {
        header('location:contenido.php');
    } else {
        header('location:../../empleado/usuarios/contenido.php');
    }
} 
