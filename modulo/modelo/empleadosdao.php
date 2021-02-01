<?php

include 'conexion.php';

class EmpleadoDao extends Conexion
{



  /* -----------INSERTAR UN EMPLEADO-------------- */

  public function insertarEmpleado($id_empleado, $priapell, $segapell, $prinom, $segnom, $email, $celular, $direccion, 
                                   $idsucursal, $idcargo, $ciudad, $departamento, $fecha_contratarcion)
  {
    $mensaje = "";
    try {
      $conexion = Conexion::conectar();
      $sql = "INSERT INTO empleado(id_empleado,priapell,segapell,prinom,segnom,email,celular,direccion,idsucursal,idcargo,ciudad,departamento,fecha_contratarcion)
       VALUES (:id_empleado,:priapell,:segapell,:prinom,:segnom,:email,:celular,:direccion,:idsucursal,:idcargo,:ciudad,:departamento,:fecha_contratarcion);";

      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":id_empleado", $id_empleado);
      $stmt->bindParam(":priapell", $priapell);
      $stmt->bindParam(":segapell", $segapell);
      $stmt->bindParam(":prinom", $prinom);

      $stmt->bindParam(":segnom", $segnom);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":celular", $celular);
      $stmt->bindParam(":direccion", $direccion);

      $stmt->bindParam(":idsucursal", $idsucursal);
      $stmt->bindParam(":idcargo", $idcargo);
      $stmt->bindParam(":ciudad", $ciudad);
      $stmt->bindParam(":departamento", $departamento);
      $stmt->bindParam(":fecha_contratarcion", $fecha_contratarcion);




      $stmt->execute();
      $fila = $stmt->rowCount();
      $mensaje = "Se guardo empleado con exito!!";
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


  /* ----------------LISTA DE EMPLEADOS ---------------------*/
  public function listaEmpleados()
  {
    $conexion = Conexion::conectar();
    $sql = "SELECT * FROM empleado order by id_empleado asc;";
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



  /* ---------------ACTUALIZAR UN EMPLEADO-------------------------- */
  public function actualizarEmpleado($id_empleado, $priapell, $segapell, $prinom, $segnom, $email, $celular, $direccion, 
                                      $idsucursal, $idcargo, $ciudad, $departamento, $fecha_contratarcion)
  {

    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "update empleado set id_empleado=:id_empleado,priapell=:priapell,segapell=:segapell,prinom=:prinom,segnom=:segnom,email=:email,celular=:celular,
      direccion=:direccion,idsucursal=:idsucursal,idcargo=:idcargo,ciudad=:ciudad,departamento=:departamento,fecha_contratarcion=:fecha_contratarcion where id_empleado=:id_empleado";
      $stmt = $conexion->prepare($sql);

      $stmt->bindParam(":id_empleado", $id_empleado);
      $stmt->bindParam(":priapell", $priapell);
      $stmt->bindParam(":segapell", $segapell);
      $stmt->bindParam(":prinom", $prinom);

      $stmt->bindParam(":segnom", $segnom);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":celular", $celular);
      $stmt->bindParam(":direccion", $direccion);

      $stmt->bindParam(":idsucursal", $idsucursal);
      $stmt->bindParam(":idcargo", $idcargo);
      $stmt->bindParam(":ciudad", $ciudad);
      $stmt->bindParam(":departamento", $departamento);
      $stmt->bindParam(":fecha_contratarcion", $fecha_contratarcion);

      $stmt->execute();
      $mensaje = "Se actualizo empleado con exito!!";
    } // fin de try

    catch (PDOException $e) {

      $mensaje = "Problemas al Actualizar Consulte con el Administrador del Sistema!!";
    } // fin del catch

    return $mensaje;
  } // fin del metodo       



  /* ----------------ELIMINAR UN EMPLEADO------------------ */

  public function eliminarEmpleado($id_empleado)
  {
    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "delete from empleado where id_empleado=:id_empleado";
      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":id_empleado", $id_empleado);
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