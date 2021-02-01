<?php
require_once '../../../modelo/productosdao.php';
$dao = new ProductoDao();
if (isset($_POST['boton'])) {

    if ($_POST['boton'] == 'guardar') {


        if (
            isset($_POST['id_producto']) & isset($_POST['nom_producto']) & isset($_POST['pre_producto']) & isset($_POST['cant_producto'])
            & isset($_POST['id_categoria']) & isset($_POST['deta_producto'])
        ) {

            $id_producto = htmlspecialchars($_POST['id_producto']);
            $nom_producto = htmlspecialchars($_POST['nom_producto']);
            $pre_producto = htmlspecialchars($_POST['pre_producto']);
            $cant_producto = htmlspecialchars($_POST['cant_producto']);
            $id_categoria = htmlspecialchars($_POST['id_categoria']);
            $deta_producto = htmlspecialchars($_POST['deta_producto']);



            if (empty($id_producto) | empty($nom_producto) | empty($pre_producto) | empty($cant_producto)
            | empty($id_categoria)| empty($deta_producto)) {
                $mensaje = "Campo Vacio";
            } else {

                $mensaje = $dao->insertarProducto($id_producto, $nom_producto, $pre_producto, $cant_producto,$id_categoria,$deta_producto);
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

require_once 'vistaguardar.php';
