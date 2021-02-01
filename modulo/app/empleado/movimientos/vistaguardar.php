<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Entrada de Datos de Usuario</title>
</head>

<body>

    <div class="container-fluid mx-md-1  ">

        <div class="">

            <div class="d-flex justify-content-center  ">


                <form action="?action=guardar" method="post" class="container contenedor-guardar-usuarios animacion-lateral pl-md-5 pt-md-4">

                    <div class="row">
                        <div class="col-12">
                            <div class="row ">

                                <div class="col-11 mx-1">

                                    <?php
                                    if (empty($mensaje) == false) {

                                        echo "<div class='alert alert-warning alert-dismissible fade show'>
                                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                            " . $mensaje . "</div>";
                                    }
                                    ?>


                                </div>

                                <div class="col-md-3 my-3">
                                    <label for="">Producto</label>
                                    <select name="id_producto" class="form-control">
                                        <option value="0">Seleccionar</option>
                                        <?php

                                        include "./modelo/conexion.php";
                                        $cnx = conexion::conectar();
                                        $sql = "SELECT id_producto,nom_producto FROM producto";
                                        $stmt = $cnx->prepare($sql);
                                        $stmt->execute();
                                        $filas = $stmt->fetchAll(\PDO::FETCH_OBJ);

                                        foreach ($filas as $iteracar) {

                                        ?>

                                            <option value="<?php print($iteracar->id_producto); ?>"><?php print($iteracar->nom_producto); ?></option>


                                        <?php
                                        }

                                        ?>

                                    </select><br>
                                </div>

                                <div class="col-md-3 my-3 mx-2">
                                    <label for="">id empleado</label>
                                    <select name="id_empleado" class="form-control">
                                        <option value="0">Seleccionar </option>
                                        <?php

                                        include "./modelo/conexion.php";
                                        $cnx = conexion::conectar();
                                        $sql = "SELECT id_empleado, prinom FROM empleado";
                                        $stmt = $cnx->prepare($sql);
                                        $stmt->execute();
                                        $filas = $stmt->fetchAll(\PDO::FETCH_OBJ);

                                        foreach ($filas as $iteracar) {

                                        ?>

                                            <option value="<?php print($iteracar->id_empleado); ?>"><?php print($iteracar->prinom); ?></option>


                                        <?php
                                        }

                                        ?>

                                    </select><br>
                                </div>

                                <div class="col-md-3 my-3 mr-2">
                                    <label for="">Compra o venta</label>
                                    <!-- <input type="text" class="form-control" name="compra_venta" value="<?php if (isset($compra_venta)) {
                                                                                                                echo $compra_venta;
                                                                                                            } ?>"> -->
                                    <select name="compra_venta" id="" class="form-control">
                                        <option value="0">Seleccionar</option>
                                        <option value="c">Compra</option>
                                        <option value="v">Venta</option>
                                    </select>
                                </div>

                                <div class="col-md-2 my-3">
                                    <label for="">fecha de compra</label>
                                    <input type="date" class="form-control" name="fecha" value="<?php if (isset($fecha)) {
                                                                                                    echo $fecha;
                                                                                                } ?>">
                                </div>

                                <div class="row col-md-12">


                                    <div class="col-md-3">
                                        <label for="">Categoria</label>
                                        <select name="id_categoria" class="form-control">
                                            <option value="0">Seleccionar</option>
                                            <?php

                                            include "./modelo/conexion.php";
                                            $cnx = conexion::conectar();
                                            $sql = "SELECT id_categoria, nomcategoria FROM categoria";
                                            $stmt = $cnx->prepare($sql);
                                            $stmt->execute();
                                            $filas = $stmt->fetchAll(PDO::FETCH_OBJ);

                                            foreach ($filas as $iteracar) {

                                            ?>

                                                <option value="<?php print($iteracar->id_categoria); ?>"><?php print($iteracar->nomcategoria); ?></option>


                                            <?php
                                            }

                                            ?>

                                        </select><br>
                                    </div>

                                    <div class="col-md-3 mx-2">
                                        <label for="">Proveedor</label>
                                        <select name="id_proveedor" class="form-control">
                                            <option value="0">seleccione un proveedor</option>
                                            <?php

                                            include "./modelo/conexion.php";
                                            $cnx = conexion::conectar();
                                            $sql = "SELECT id_proveedor, nom_proveedor FROM proveedor";
                                            $stmt = $cnx->prepare($sql);
                                            $stmt->execute();
                                            $filas = $stmt->fetchAll(\PDO::FETCH_OBJ);

                                            foreach ($filas as $iteracar) {

                                            ?>

                                                <option value="<?php print($iteracar->id_proveedor); ?>"><?php print($iteracar->nom_proveedor); ?></option>


                                            <?php
                                            }

                                            ?>

                                        </select><br>
                                    </div>



                                    <div class="col-md-2 mr-2">
                                        <label for="">Cantidad </label>
                                        <input type="num" class="form-control" name="cantidad" value="<?php if (isset($cantidad)) {
                                                                                                            echo $cantidad;
                                                                                                        } ?>">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="">Precio del Producto</label>
                                        <input type="num" class="form-control" name="precio" value="<?php if (isset($precio)) {
                                                                                                        echo $precio;
                                                                                                    } ?>">
                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>


                    <br>
                    <center>
                        <button type="submit" name="boton" value="guardar" class="btn btn-primary my-2 p-2 mx-2">
                            <i class="fas fa-check"></i> Guardar
                        </button>
                        <button type="submit" name="boton" value="limpiar" class="btn btn-warning my-2 p-2">
                            <i class="fas fa-trash"></i> Limpiar
                        </button>
                    </center>
                </form>


            </div>
        </div>

    </div>

</body>

</html>