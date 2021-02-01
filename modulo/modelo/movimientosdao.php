<?php

require "conexion.php";


class MovimientoDao extends conexion
{


    /* ---------------------INSERTAR UN MOVIMIENTO------------------------ */
    public function insertarMovimiento(
        $fecha,
        $id_producto,
        $cantidad,
        $precio,
        $id_proveedor,
        $id_empleado,
        $compra_venta,
        $id_categoria
    ) {
        $mensaje = " ";

        try {

            $conexion = conexion::conectar();
            $sql = "INSERT INTO movimientos (fecha,
                                            id_producto, 
                                            cantidad, 
                                            precio, 
                                            id_proveedor, 
                                            id_empleado,
                                            compra_venta, 
                                            id_categoria) 
                 VALUES (:fecha,:id_producto,:cantidad,:precio,:id_proveedor,:id_empleado,:compra_venta,:id_categoria)";

            $stmt = $conexion->prepare($sql);

            $stmt->bindParam(":fecha", $fecha);
            $stmt->bindParam(":id_producto", $id_producto);
            $stmt->bindParam(":cantidad", $cantidad);
            $stmt->bindParam(":precio", $precio);
            $stmt->bindParam(":id_proveedor", $id_proveedor);
            $stmt->bindParam(":id_empleado", $id_empleado);
            $stmt->bindParam(":compra_venta", $compra_venta);
            $stmt->bindParam(":id_categoria", $id_categoria);
            $stmt->execute();

            $mensaje = "Realizado con exito !!";
        } catch (PDOException $e) {

            echo " el error es" . $e->getMessage();
        }

        $stmt = null;
        return $mensaje;
    }


    public function consultarDatosProducto($id_producto, $cantidad)
    {

        $mensaje = " ";

        try {


            /* Primero hacemos una consulta SQL para sacar un array asosiativo y guardar los datos que necesitamos */
            $conexion = conexion::conectar();
            $statement = $conexion->prepare('SELECT * FROM producto where id_producto=:id_producto');
            $statement->execute(array(':id_producto' => $id_producto));

            $resultado = $statement->fetch(PDO::FETCH_ASSOC);/* Se verifica si la consulta fue false/true, encontro algo o no */



            /* Aquí tomamos la cantidad del producto que hay antes de ser modificado */
            $_SESSION['cantidad'] = $resultado['cant_producto'];/* Array asociativo */


            /* Este solo es de prueba */
            $_SESSION['nom_producto'] = $resultado['nom_producto'];/* Array asociativo */


            /* Y luego ya le pasamos ese resultado a una sentencia SQL para que lo modifique */


            $mensaje = "No hay cantidad, la cantidad de " . $_SESSION['nom_producto'] . " en inventario es de: " . $_SESSION['cantidad'] . " y usted desea vender: " . $cantidad;
        } catch (PDOException $e) {

            echo " el error es" . $e->getMessage();
        }

        //$statement = null;
        return $mensaje;
    }


    /* MOVIMIENTO DE VENTA  */

    public function movimientoVenta($id_producto, $cantidad)
    {
        $mensaje = " ";

        try {


            /* Primero hacemos una consulta SQL para sacar un array asosiativo y guardar lso datos que necesitamos */
            $conexion = conexion::conectar();
            $statement = $conexion->prepare('SELECT * FROM producto where id_producto=:id_producto');
            $statement->execute(array(':id_producto' => $id_producto));

            $resultado = $statement->fetch(PDO::FETCH_ASSOC);/* Se verifica si la consulta fue false/true, encontro algo o no */



            /* Aquí tomamos la cantidad del producto que hay antes de ser modificado */
            $_SESSION['cantidad'] = $resultado['cant_producto'];/* Array asociativo */


            /* Este solo es de prueba */
            $_SESSION['nom_producto'] = $resultado['nom_producto'];/* Array asociativo */




            /* -----DESCONTANDO PRODUTOS DE STOCK */

            /* Retamos la cantidad en stock - la que vamos a verder */
            $descuento = $_SESSION['cantidad'] - $cantidad;


            /* Y luego ya le pasamos ese resultado a una sentencia SQL para que lo modifique */
            $statement = $conexion->prepare('UPDATE producto SET cant_producto=:cant_producto where id_producto=:id_producto');
            $statement->execute(array(':id_producto' => $id_producto, ':cant_producto' => $descuento));


            $mensaje = "La cantidad de " . $_SESSION['nom_producto'] . " es de: " . $_SESSION['cantidad'] . " con descuento queda en: " . $descuento;
        } catch (PDOException $e) {

            echo " el error es" . $e->getMessage();
        }

        //$statement = null;
        return $mensaje;
    }

      /* MOVIMIENTO DE VENTA  */

      public function movimienCompra($id_producto, $cantidad)
      {
          $mensaje = " ";
  
          try {
  
  
              /* Primero hacemos una consulta SQL para sacar un array asosiativo y guardar lso datos que necesitamos */
              $conexion = conexion::conectar();
              $statement = $conexion->prepare('SELECT * FROM producto where id_producto=:id_producto');
              $statement->execute(array(':id_producto' => $id_producto));
  
              $resultado = $statement->fetch(PDO::FETCH_ASSOC);/* Se verifica si la consulta fue false/true, encontro algo o no */
  
  
  
              /* Aquí tomamos la cantidad del producto que hay antes de ser modificado */
              $_SESSION['cantidad'] = $resultado['cant_producto'];/* Array asociativo */
  
  
              /* Este solo es de prueba */
              $_SESSION['nom_producto'] = $resultado['nom_producto'];/* Array asociativo */
  
  
  
  
              /* -----DESCONTANDO PRODUTOS DE STOCK */
  
              /* Retamos la cantidad en stock - la que vamos a verder */
              $descuento = $_SESSION['cantidad'] + $cantidad;
  
  
              /* Y luego ya le pasamos ese resultado a una sentencia SQL para que lo modifique */
              $statement = $conexion->prepare('UPDATE producto SET cant_producto=:cant_producto where id_producto=:id_producto');
              $statement->execute(array(':id_producto' => $id_producto, ':cant_producto' => $descuento));
  
  
              $mensaje = "La cantidad de " . $_SESSION['nom_producto'] . " es de: " . $_SESSION['cantidad'] . " con aumento queda en: " . $descuento;
          } catch (PDOException $e) {
  
              echo " el error es" . $e->getMessage();
          }
  
          //$statement = null;
          return $mensaje;
      }

    /* ----------------------MOSTRAR MOVIMIENTOS COMPRAS------------------------ */
    public function listaMovimientos()
    {
        $conexion = conexion::conectar();
        $sql = "SELECT * FROM movimientos WHERE compra_venta ='c' order by id_producto asc;";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $array;
    }


    /* ----------------------MOSTRAR MOVIMIENTOS VENTAS------------------------ */
    public function listaVentas()
    {
        $conexion = conexion::conectar();
        $sql = "SELECT * FROM movimientos WHERE compra_venta ='v' order by id_producto asc;";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $array;
    }



    



}
