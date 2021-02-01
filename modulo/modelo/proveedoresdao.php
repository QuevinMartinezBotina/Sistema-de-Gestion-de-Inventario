<?php

include 'conexion.php';

class proveedorDao extends Conexion
{

  public function insertarProveedor(
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
  ) {
    $mensaje = "";
    try {
      $conexion = Conexion::conectar();
      $sql = "INSERT INTO proveedor(id_proveedor, nom_proveedor,email, tel_proveedor,direccion_proveedor,ciudad,estado_departamento,banco,cuenta, celular)
      VALUES (:id_proveedor, :nom_proveedor,:email, :tel_proveedor,:direccion_proveedor,:ciudad,:estado_departamento,:banco,:cuenta, :celular);";

      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":id_proveedor", $id_proveedor);
      $stmt->bindParam(":nom_proveedor", $nom_proveedor);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":tel_proveedor", $tel_proveedor);
      $stmt->bindParam(":direccion_proveedor", $direccion_proveedor);
      $stmt->bindParam(":ciudad", $ciudad);
      $stmt->bindParam(":estado_departamento", $estado_departamento);
      $stmt->bindParam(":banco", $banco);
      $stmt->bindParam(":cuenta", $cuenta);
      $stmt->bindParam(":celular", $celular);

      $stmt->execute();
      $fila = $stmt->rowCount();
      $mensaje = "Se guardo proveedor con exito!!";
    } catch (PDOException $e) {

      if ($e->errorInfo[1] == 1062) {
        $mensaje = "Proveedor Existe!!";
        // duplicate entry, do something else
      } else {
        // an error other than duplicate entry occurred
        echo $e->errorInfo[1];
      }
    }
    return $mensaje;
  }

  public function listaProveedores()
  {
    $conexion = Conexion::conectar();
    $sql = "SELECT * FROM proveedor order by id_proveedor asc;";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = null;
    return $array;
  }

  public function listaProveedor($numid)
  {
    $conexion = Conexion::conectar();
    $sql = "SELECT * FROM proveedor where numid=:numid order by numid asc;";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":numid", $numid);
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = null;
    return $array;
  }






  public function actualizarProveedor(
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
  ) {

    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "update proveedor set id_proveedor=:id_proveedor, nom_proveedor=:nom_proveedor,email=:email,tel_proveedor=:tel_proveedor,
      direccion_proveedor=:direccion_proveedor,ciudad=:ciudad,estado_departamento=:estado_departamento,banco=:banco,cuenta=:cuenta, 
      celular=:celular where id_proveedor=:id_proveedor";
   
      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":id_proveedor", $id_proveedor);
      $stmt->bindParam(":nom_proveedor", $nom_proveedor);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":tel_proveedor", $tel_proveedor);
      $stmt->bindParam(":direccion_proveedor", $direccion_proveedor);
      $stmt->bindParam(":ciudad", $ciudad);
      $stmt->bindParam(":estado_departamento", $estado_departamento);
      $stmt->bindParam(":banco", $banco);
      $stmt->bindParam(":cuenta", $cuenta);
      $stmt->bindParam(":celular", $celular);
      $stmt->execute();
      $mensaje = "Se actualizo proveedor con Exito!!";
    } // fin de try

    catch (PDOException $e) {

      //$mensaje = "Problemas al actualizar, Consulte con el administrador del sistema!!";
      $mensaje = $e->getMessage();
    } // fin del catch

    return $mensaje;
  } // fin del metodo       






  public function eliminarProveedor($id_proveedor)
  {
    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "delete from proveedor where id_proveedor=:id_proveedor;";
      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":id_proveedor", $id_proveedor);
      $stmt->execute();
      $mensaje = "Se eliminó proveedor con Exito";
    } // fin del try

    catch (PDOException $e) {
      $mensaje = "Problemas al eliminar consulte con el administrador";
    } // fin del catch

    return $mensaje;
  } // fin del metodo eliminarUsuario

  


  public function eliminarUsuarios()
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
  } // fin del metodo eliminarUsuario



}// fn de clase