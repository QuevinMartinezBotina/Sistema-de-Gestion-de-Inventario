<?php

include 'conexion.php';

class crudUsuarios extends Conexion
{


    /* ----------------INSERTAR USUARIO---------------------- */

    public function insertarUsuario($id, $usuario, $pass, $rol)
    {
        $mensaje = "";

        try {
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO usuarios_login(id,usuario,pass,rol) VALUES (:id,:usuario,:pass,:rol);";

            $stmt = $conexion->prepare($sql);


            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":usuario", $usuario);
            $stmt->bindParam(":pass", $pass);
            $stmt->bindParam(":rol", $rol);
            $stmt->execute();
            $fila = $stmt->rowCount();

            $mensaje = "Usuario guardado con exito";
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                $mensaje = "Usuario existe";
            } else {
                echo $e->errorInfo[1];
            }
        }

        return $mensaje;
    }
}
