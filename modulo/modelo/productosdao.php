<?php

include 'conexion.php';

class ProductoDao extends Conexion
{



  /* -----------INSERTAR UNA PRODUCTO-------------- */

  public function insertarProducto($id_producto, $nom_producto,$pre_producto,$cant_producto,$id_categoria,$deta_producto)
  {
    $mensaje = "";
    try {
      $conexion = Conexion::conectar();
      $sql = "INSERT INTO producto(id_producto, nom_producto,pre_producto,cant_producto,id_categoria,deta_producto) 
      VALUES (:id_producto, :nom_producto,:pre_producto,:cant_producto,:id_categoria,:deta_producto);";

      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":id_producto", $id_producto);
      $stmt->bindParam(":nom_producto", $nom_producto);
      $stmt->bindParam(":pre_producto", $pre_producto);
      $stmt->bindParam(":cant_producto", $cant_producto);
      $stmt->bindParam(":id_categoria", $id_categoria);
      $stmt->bindParam(":deta_producto", $deta_producto);
      



      $stmt->execute();
      $fila = $stmt->rowCount();
      $mensaje = "Se guardo producto con exito!!";
    } catch (PDOException $e) {

      if ($e->errorInfo[1] == 1062) {
        $mensaje = "Producto Existe!!";
        // duplicate entry, do something else
      } else {
        // an error other than duplicate entry occurred
        echo $e->errorInfo[1];
      }
    }
    return $mensaje;
  }


  /* ----------------LISTA DE PRODUCTOS ---------------------*/
  public function listaProductos()
  {
    $conexion = Conexion::conectar();
    $sql = "SELECT * FROM producto order by id_producto asc;";
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



  /* ---------------ACTUALIZAR UN PRODUCTO-------------------------- */
  public function actualizarProducto($id_producto, $nom_producto,$pre_producto,$cant_producto,$id_categoria,$deta_producto)
  {

    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "update producto set id_producto=:id_producto,nom_producto=:nom_producto, pre_producto=:pre_producto,cant_producto=:cant_producto,
      id_categoria=:id_categoria,deta_producto=:deta_producto where id_producto=:id_producto";
      $stmt = $conexion->prepare($sql);

      $stmt->bindParam(":id_producto", $id_producto);
      $stmt->bindParam(":nom_producto", $nom_producto);
      $stmt->bindParam(":pre_producto", $pre_producto);
      $stmt->bindParam(":cant_producto", $cant_producto);
      $stmt->bindParam(":id_categoria", $id_categoria);
      $stmt->bindParam(":deta_producto", $deta_producto);



      $stmt->execute();
      $mensaje = "Se actualizo producto con exito!!";
    } // fin de try

    catch (PDOException $e) {

      $mensaje = "Problemas al Actualizar Consulte con el Administrador del Sistema!!";
    } // fin del catch

    return $mensaje;
  } // fin del metodo       



  /* ----------------ELIMINAR UN CARGO------------------ */

  public function eliminarProducto($id_producto)
  {
    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "delete from producto where id_producto=:id_producto";
      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":id_producto", $id_producto);
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