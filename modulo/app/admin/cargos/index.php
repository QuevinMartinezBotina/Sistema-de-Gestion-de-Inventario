<?php

session_start();

if (isset($_SESSION['usuario'])) {

    if ($_SESSION['rol'] == '1') {
        header('location:cargos.php');
    } else {
        header('location:../../empleado/cargos/cargos.php');
    }
} 
