<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '2') {
        header('location:contenido.php');
    } else {
        header('location:../../admin/usuarios/contenido.php');
    }
} 
