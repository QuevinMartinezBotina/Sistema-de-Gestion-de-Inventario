<?php

include 'conexion.php';

class SucursalDao extends Conexion
{



  /* -----------INSERTAR UNA SUCURSAL-------------- */

  public function insertarSucursal($idsucursal, $nomsucursal,$direccion,$ciudad)
  {
    $mensaje = "";
    try {
      $conexion = Conexion::conectar();
      $sql = "INSERT INTO sucursal(idsucursal, nomsucursal,direccion,ciudad) VALUES (:idsucursal, :nomsucursal,:direccion,:ciudad);";

      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":idsucursal", $idsucursal);
      $stmt->bindParam(":nomsucursal", $nomsucursal);
      $stmt->bindParam(":direccion", $direccion);
      $stmt->bindParam(":ciudad", $ciudad);



      $stmt->execute();
      $fila = $stmt->rowCount();
      $mensaje = "Se guardo sucursal con exito!!";
    } catch (PDOException $e) {

      if ($e->errorInfo[1] == 1062) {
        $mensaje = "Sucursal Existe!!";
        // duplicate entry, do something else
      } else {
        // an error other than duplicate entry occurred
        echo $e->errorInfo[1];
      }
    }
    return $mensaje;
  }


  /* ----------------LISTA DE SUCURSALES ---------------------*/
  public function listaSucursales()
  {
    $conexion = Conexion::conectar();
    $sql = "SELECT * FROM sucursal order by idsucursal asc;";
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



  /* ---------------ACTUALIZAR UNA SUCURSAL-------------------------- */
  public function actualizarSucursal($idsucursal, $nomsucursal,$direccion,$ciudad)
  {

    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "update sucursal set idsucursal=:idsucursal,nomsucursal=:nomsucursal, direccion=:direccion,ciudad=:ciudad where idsucursal=:idsucursal";
      $stmt = $conexion->prepare($sql);

      $stmt->bindParam(":idsucursal", $idsucursal);
      $stmt->bindParam(":nomsucursal", $nomsucursal);
      $stmt->bindParam(":direccion", $direccion);
      $stmt->bindParam(":ciudad", $ciudad);


      $stmt->execute();
      $mensaje = "Se actualizo sucursal con exito!!";
    } // fin de try

    catch (PDOException $e) {

      $mensaje = "Problemas al Actualizar Consulte con el Administrador del Sistema!!";
    } // fin del catch

    return $mensaje;
  } // fin del metodo       



  /* ----------------ELIMINAR UN CARGO------------------ */

  public function eliminarSucursal($idsucursal)
  {
    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "delete from sucursal where idsucursal=:idsucursal";
      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":idsucursal", $idsucursal);
      $stmt->execute();
      $mensaje = "Eliminó, sucursal con Exito";
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