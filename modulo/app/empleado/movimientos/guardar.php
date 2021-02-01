<?php
require_once '../../../modelo/movimientosdao.php';
$dao = new movimientoDao();
if (isset($_POST['boton'])) {

    if ($_POST['boton'] == 'guardar') {


        if (
            isset($_POST['id_producto']) & isset($_POST['id_proveedor']) & isset($_POST['id_empleado']) & isset($_POST['id_categoria']) &
            isset($_POST['fecha']) & isset($_POST['compra_venta']) & isset($_POST['cantidad']) & isset($_POST['precio'])
        ) {

            $id_producto = htmlspecialchars($_POST['id_producto']);
            $id_proveedor = htmlspecialchars($_POST['id_proveedor']);
            $id_empleado = htmlspecialchars($_POST['id_empleado']);
            $id_categoria = htmlspecialchars($_POST['id_categoria']);
            $fecha = htmlspecialchars($_POST['fecha']);
            $compra_venta = htmlspecialchars($_POST['compra_venta']);
            $cantidad = htmlspecialchars($_POST['cantidad']);
            $precio = htmlspecialchars($_POST['precio']);



            if ($compra_venta == 'c') {

                if (
                    empty($id_producto) | empty($id_proveedor) | empty($id_empleado) | empty($id_categoria) |
                    empty($fecha) | empty($compra_venta) | empty($cantidad) | empty($precio)
                ) {
                    $mensaje = "Campo Vacio";
                } else {

                    $mensaje = $dao->movimienCompra($id_producto, $cantidad);


                    $mensaje = $dao->insertarMovimiento(
                        $fecha,
                        $id_producto,
                        $cantidad,
                        $precio,
                        $id_proveedor,
                        $id_empleado,
                        $compra_venta,
                        $id_categoria
                    );
                }
            } else if ($compra_venta == 'v') {


                $mensaje = $dao->consultarDatosProducto($id_producto, $cantidad);

                if ($cantidad > $_SESSION['cantidad']) {

                } else if (empty($id_producto) | empty($id_proveedor) | empty($id_empleado) | empty($id_categoria) | empty($fecha) | empty($compra_venta) | empty($cantidad) | empty($precio)) {
                    $mensaje = "Campo Vacio";
                } else {
                    $mensaje = $dao->movimientoVenta($id_producto, $cantidad);

                    $mensaje = $dao->insertarMovimiento(
                        $fecha,
                        $id_producto,
                        $cantidad,
                        $precio,
                        $id_proveedor,
                        $id_empleado,
                        $compra_venta,
                        $id_categoria
                    );
                }
            } else {
                $mensaje = "Seleccione si es una compra o una venta";
            }
        }
    } else if ($_POST['boton'] == 'limpiar') {

        $fecha = "";
        $id_producto = "";
        $cantidad  = "";
        $precio = "";
        $id_proveedor = "";
        $id_empleado = "";
        $compra_venta  = "";
        $id_categoria = "";
    }
}

require_once 'vistaguardar.php';
