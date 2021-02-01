<?php

include 'conexion.php';

class CategoriaDao extends Conexion
{



  /* -----------INSERTAR UN CAGORÍA-------------- */

  public function insertarCategoria($id_categoria, $nomcategoria)
  {
    $mensaje = "";
    try {
      $conexion = Conexion::conectar();
      $sql = "INSERT INTO categoria(id_categoria, nomcategoria) VALUES (:id_categoria, :nomcategoria);";

      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":id_categoria", $id_categoria);
      $stmt->bindParam(":nomcategoria", $nomcategoria);


      $stmt->execute();
      $fila = $stmt->rowCount();
      $mensaje = "Se guardo categoría con exito!!";
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


  /* ----------------LISTA DE CATEGORÍA ---------------------*/
  public function listaCategorias()
  {
    $conexion = Conexion::conectar();
    $sql = "SELECT * FROM categoria order by id_categoria asc;";
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



  /* ---------------ACTUALIZAR UN CATEGORIA-------------------------- */
  public function actualizarCategoria($id_categoria, $nomcategoria)
  {

    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "update categoria set id_categoria=:id_categoria,nomcategoria=:nomcategoria where id_categoria=:id_categoria";
      $stmt = $conexion->prepare($sql);

      $stmt->bindParam(":id_categoria", $id_categoria);
      $stmt->bindParam(":nomcategoria", $nomcategoria);

      $stmt->execute();
      $mensaje = "Se actualizo categoria con exito!!";
    } // fin de try

    catch (PDOException $e) {

      $mensaje = "Problemas al Actualizar Consulte con el Administrador del Sistema!!";
    } // fin del catch

    return $mensaje;
  } // fin del metodo       



  /* ----------------ELIMINAR UN CATEGORIA------------------ */

  public function eliminarCategoria($id_categoria)
  {
    $mensaje = "";
    try {

      $conexion = Conexion::conectar();
      $sql = "delete from categoria where id_categoria=:id_categoria";
      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":id_categoria", $id_categoria);
      $stmt->execute();
      $mensaje = "Eliminó, categoría con exito";
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