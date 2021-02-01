<?php

// peticion get para traer información del crud

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $usuario = unserialize(base64_decode($_GET['objeto']));


    $id_proveedor = $usuario['id_proveedor'];
    $nom_proveedor = $usuario['nom_proveedor'];
    $email = $usuario['email'];
    $tel_proveedor = $usuario['tel_proveedor'];
    $direccion_proveedor = $usuario['direccion_proveedor'];
    $ciudad = $usuario['ciudad'];
    $estado_departamento = $usuario['estado_departamento'];
    $banco = $usuario['banco'];
    $cuenta = $usuario['cuenta'];
    $celular = $usuario['celular'];
 
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    require_once '../../../modelo/proveedoresdao.php';
    $dao = new proveedorDao();
    if (isset($_POST['boton'])) {

        if ($_POST['boton'] == 'actualizar') {


            if (
                isset($_POST['id_proveedor']) & isset($_POST['nom_proveedor']) & isset($_POST['email']) & isset($_POST['tel_proveedor'])
                & isset($_POST['direccion_proveedor'])  & isset($_POST['ciudad']) & isset($_POST['estado_departamento']) & isset($_POST['banco'])
                & isset($_POST['cuenta']) & isset($_POST['celular'])
            ) {


                $id_proveedor = htmlspecialchars($_POST['id_proveedor']);
                $nom_proveedor = htmlspecialchars($_POST['nom_proveedor']);
                $email = htmlspecialchars($_POST['email']);
                $tel_proveedor = htmlspecialchars($_POST['tel_proveedor']);
                $direccion_proveedor = htmlspecialchars($_POST['direccion_proveedor']);
                $ciudad = htmlspecialchars($_POST['ciudad']);
                $estado_departamento = htmlspecialchars($_POST['estado_departamento']);
                $banco = htmlspecialchars($_POST['banco']);
                $cuenta = htmlspecialchars($_POST['cuenta']);
                $celular = htmlspecialchars($_POST['celular']);

                if (
                    empty($id_proveedor) | empty($nom_proveedor) | empty($email) |  empty($tel_proveedor) |  empty($direccion_proveedor)
                    | empty($ciudad) | empty($estado_departamento) | empty($banco) |  empty($cuenta) |  empty($celular)
                ) {
                    $mensaje = "Campo Vacio";
                } else {

                    $mensaje = $dao->actualizarProveedor(
                        $id_proveedor,
                        $nom_proveedor,
                        $email,
                        $tel_proveedor,
                        $direccion_proveedor,
                        $ciudad,
                        $estado_departamento,
                        $banco,
                        $cuenta,
                        $celular
                    );
                }
            }
        } else if ($_POST['boton'] == 'limpiar') {

            $id_proveedor = "";
            $nom_proveedor = "";
            $email = "";
            $tel_proveedor = "";
            $direccion_proveedor = "";
            $ciudad = "";
            $estado_departamento = "";
            $banco = "";
            $cuenta = "";
            $celular = "";
        }
    }
} // metodo post

// peticion post para actualizar el registro


require_once 'vistaactualizar.php';
