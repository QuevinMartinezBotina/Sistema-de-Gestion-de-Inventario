<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '2') {
        header('location:categorias.php');
    } else {
        header('location:../../admin/categorias/categorias.php');
    }
} 
