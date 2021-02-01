<?php

include 'conexion.php';

class CargoDao extends Conexion
{



  /* -----------INSERTAR UN CARGO-------------- */

  public function insertarCargo($idcargo, $nomcargo)
  {
    $mensaje = "";
    try {
      $conexion = Conexion::conectar();
      $sql = "INSERT INTO cargo(idcargo, nomcargo) VALUES (:idcargo, :nomcargo);";

      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":idcargo", $idcargo);
      $stmt->bindParam(":nomcargo", $nomcargo);


      $stmt->execute();
      $fila = $stmt->rowCount();
      $mensaje = "Se guardo cargo con exito!!";
    } catch (PDOException $e) {

      if ($e->errorInfo[1] == 1062) {
        $mensaje = "Cargo Existe!!";
        // duplicate entry, do something else
      } else {
        // an error other than duplicate entry occurred
        echo $e->errorInfo[1];
      }
    }
    return $mensaje;
  }


  /* ----------------LISTA DE CARGOS ---------------------*/
  public function listaCargos()
  {
    $conexion = Conexion::conectar();
    $sql = "SELECT * FROM cargo order by idcargo asc;";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = null;
    return $array;
  }


/*   public function listausuario($numid)
  {
    $conexion = Conexion::conectar();
    $sql = "SELECT * FROM usuario where numid=:numid order by numid asc;";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":numid", $numid);
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = null;
    return $array;
  } */



  /* ---------------ACTUALIZAR UN CARGO-------------------------- */
  public function actualizarCargo($idcargo, $nomcargo)
  {

    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "update cargo set idcargo=:idcargo,nomcargo=:nomcargo where idcargo=:idcargo";
      $stmt = $conexion->prepare($sql);

      $stmt->bindParam(":idcargo", $idcargo);
      $stmt->bindParam(":nomcargo", $nomcargo);

      $stmt->execute();
      $mensaje = "Se actualizo cargo con exito!!";
    } // fin de try

    catch (PDOException $e) {

      $mensaje = "Problemas al Actualizar Consulte con el Administrador del Sistema!!";
    } // fin del catch

    return $mensaje;
  } // fin del metodo       



  /* ----------------ELIMINAR UN CARGO------------------ */

  public function eliminarCargo($idcargo)
  {
    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "delete from cargo where idcargo=:idcargo";
      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":idcargo", $idcargo);
      $stmt->execute();
      $mensaje = "Eliminó, Usuario con Exito";
    } // fin del try

    catch (PDOException $e) {
      $mensaje = "Problemas al Eliminar consulte con el administrador";
    } // fin del catch

    return $mensaje;
  } // fin del metodo eliminarUsuario


 /*  public function eliminarUsuarios()
  {
    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "delete from usuario";
      $stmt = $conexion->prepare($sql);
      $stmt->execute();
      $mensaje = "Eliminó, Usuarios con Exito";
    } // fin del try

    catch (PDOException $e) {
      $mensaje = "Problemas al Eliminar consulte con el administrador";
    } // fin del catch

    return $mensaje;
  } */ // fin del metodo eliminarUsuario



}// fn de clase