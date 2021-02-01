<?php

session_start();


if (isset($_SESSION['usuario'])) {
    header('location:../../index.php');
}



$errores = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (empty($_POST['usuario']) or empty($_POST['password'])) {/* empty dice "si esto no tiene contenido/esta vacio" */
        $errores .= '<li>Por favor rellena los campos correctamente</li>';
    } else {

        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);/* Aquí convertimos a minuscula sy comprobamso que no tenga caracteres extraños */
        $password = $_POST['password'];

       /*  $password = hash('sha512', $password); *//* Encriptamos contraseña */

        /* echo $usuario . "<br/> pw1: " . $password ; utilizado para ver si se enviaba los datos*/

        /* ------------CONEXIÓN BASE DE DATOS---------- */
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=soflithe', 'root', '');
        } catch (PDOException $e) {
            echo "Error en conexión: " . $e->getMessage();
        }

        /*-------- CONSULTA SQL----- */
        $statement = $conexion->prepare('SELECT * FROM usuario where usuario_empleado=:usuario AND contra_empleado=:password');
        $statement->execute(array(':usuario' => $usuario, ':password' => $password));

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);/* Se verifica si la consulta fue false/true, encontro algo o no */


        if ($resultado !== false) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['rol'] = $resultado['nivel_acceso'];/* Array asociativo */
            header('location:../../index.php');
        } else {
            $errores .= "<li>Datos incorrectos</li>";
        }
    }
}
require 'login.view.php';
