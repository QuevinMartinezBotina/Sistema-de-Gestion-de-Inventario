<?php

// peticion get para traer información del crud

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $usuario = unserialize(base64_decode($_GET['objeto']));

    $usuario_empleado = $usuario['usuario_empleado'];
    $contra_empleado = $usuario['contra_empleado'];
    $id_empleado = $usuario['id_empleado'];
    $nivel_acceso = $usuario['nivel_acceso'];
    $estado = $usuario['estado'];

} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    require_once '../../../modelo/usuariodao.php';
    $dao = new UsuarioDao();
    if (isset($_POST['boton'])) {

        if ($_POST['boton'] == 'guardar') {


            if (isset($_POST['usuario_empleado']) & isset($_POST['contra_empleado']) & isset($_POST['id_empleado']) & isset($_POST['nivel_acceso'])
            & isset($_POST['estado'])) {

              

                $usuario_empleado = htmlspecialchars($_POST['usuario_empleado']);
                $contra_empleado = htmlspecialchars($_POST['contra_empleado']);
                $id_empleado = htmlspecialchars($_POST['id_empleado']);
                $nivel_acceso = htmlspecialchars($_POST['nivel_acceso']);
                $estado = htmlspecialchars($_POST['estado']);

                if (empty($usuario_empleado) | empty($contra_empleado) | empty($id_empleado) |  empty($nivel_acceso) |  empty($estado)) {
                    $mensaje = "Campo Vacio";
                } else {

                    $mensaje = $dao->actualizarUsuario($usuario_empleado, $contra_empleado, $id_empleado, $nivel_acceso,$estado);
                }
            }
        } else if ($_POST['boton'] == 'limpiar') {

            $numid = "";
            $nombre = "";
            $apellido = "";
            $mensaje = "";
        }
    }
} // metodo post

// peticion post para actualizar el registro


require_once 'vistaactualizar.php';
