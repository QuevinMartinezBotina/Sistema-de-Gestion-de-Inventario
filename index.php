<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '1') {
        header('location:modulo/app/admin/usuarios/contenido.php');
    } else {
        header('location:modulo/app/empleado/usuarios/contenido.php');
    }
} else {
    header('location:modulo/app/login.php');
}
