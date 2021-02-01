<?php

if (isset($_GET['action'])) {

    if ($_GET['action'] == "mostrar") {

        require_once "mostrar.php";
    } elseif ($_GET['action'] == "guardar") {

        require_once "guardar.php";
    } elseif ($_GET['action'] == "eliminar") {

        require_once "eliminar.php";
    } elseif ($_GET['action'] == "actualizar") {

        require_once "actualizar.php";
    } elseif ($_GET['action'] == "inicio") {

        require_once "bienvenida.php";
    } elseif ($_GET['action'] == "ventas") {

        require_once "mostrarventas.php";
    } else {

        require_once "page404.php";
    }
} else {

    require_once "bienvenida.php"; //aqui podes poner una bienvenida o un login
}
