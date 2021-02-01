<?php

// peticion get para traer información del crud

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $usuario = unserialize(base64_decode($_GET['objeto']));

    $id_categoria = $usuario['id_categoria'];
    $nomcategoria = $usuario['nomcategoria'];
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    require_once '../../../modelo/categoriasdao.php';
    $dao = new CategoriaDao();
    if (isset($_POST['boton'])) {

        if ($_POST['boton'] == 'guardar') {


            if (isset($_POST['id_categoria']) & isset($_POST['nomcategoria'])) {

                $id_categoria = htmlspecialchars($_POST['id_categoria']);
                $nomcategoria = htmlspecialchars($_POST['nomcategoria']);


                if (empty($id_categoria) | empty($nomcategoria)) {
                    $mensaje = "Campo Vacio";
                } else {

                    $mensaje = $dao->actualizarCategoria($id_categoria, $nomcategoria);
                }
            }
        } else if ($_POST['boton'] == 'limpiar') {

            $id_categoria = "";
            $nomcategoria = "";
        }
    }
} // metodo post

// peticion post para actualizar el registro


require_once 'vistaactualizar.php';
