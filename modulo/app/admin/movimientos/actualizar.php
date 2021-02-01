<?php

// peticion get para traer información del crud

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $usuario = unserialize(base64_decode($_GET['objeto']));

    $id_producto = $usuario['id_producto'];
    $nom_producto = $usuario['nom_producto'];
    $pre_producto = $usuario['pre_producto'];
    $cant_producto = $usuario['cant_producto'];
    $id_categoria = $usuario['id_categoria'];
    $deta_producto = $usuario['deta_producto'];
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    require_once '../../../modelo/productosdao.php';
    $dao = new ProductoDao();
    if (isset($_POST['boton'])) {

        if ($_POST['boton'] == 'guardar') {


            if (
                isset($_POST['id_producto']) & isset($_POST['nom_producto']) & isset($_POST['pre_producto']) & isset($_POST['cant_producto'])
                & isset($_POST['id_categoria'])  & isset($_POST['deta_producto'])
            ) {

                $id_producto = htmlspecialchars($_POST['id_producto']);
                $nom_producto = htmlspecialchars($_POST['nom_producto']);
                $pre_producto = htmlspecialchars($_POST['pre_producto']);
                $cant_producto = htmlspecialchars($_POST['cant_producto']);
                $id_categoria = htmlspecialchars($_POST['id_categoria']);
                $deta_producto = htmlspecialchars($_POST['deta_producto']);




                if (
                    empty($id_producto) | empty($nom_producto) | empty($pre_producto)
                    | empty($id_categoria) | empty($deta_producto)
                ) {
                    $mensaje = "Campo Vacio";
                } else {
                    $mensaje = $dao->actualizarProducto($id_producto, $nom_producto, $pre_producto, $cant_producto, $id_categoria, $deta_producto);
                }
            }
        } else if ($_POST['boton'] == 'limpiar') {

            $id_producto = "";
            $nom_producto = "";
            $pre_producto = "";
            $cant_producto = "";
            $id_categoria = "";
            $deta_producto = "";
        }
    }
} // metodo post

// peticion post para actualizar el registro


require_once 'vistaactualizar.php';
