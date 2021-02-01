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
                        <div class="col-11 mx-1">

                            <?php
                            if (empty($mensaje) == false) {

                                echo "<div class='alert alert-warning alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            " . $mensaje . "</div>";
                            }
                            ?>


                        </div>

                        <div class="col-md-3 ">

                            <label>ID empleado</label>
                            <input type="num" name="id_empleado" class="form-control" value="<?php if (isset($id_empleado)) {
                                                                                                    echo $id_empleado;
                                                                                                } ?>">
                        </div>

                        <div class="col-md-4 mx-2">

                            <label>Primer Apellido</label>
                            <input type="text" name="priapell" class="form-control" value="<?php if (isset($priapell)) {
                                                                                                echo $priapell;
                                                                                            } ?>">
                        </div>


                        <div class="col-md-4 ">

                            <label>Segundo Apellido</label>
                            <input type="text" name="segapell" class="form-control" value="<?php if (isset($segapell)) {
                                                                                                echo $segapell;
                                                                                            } ?>">
                        </div>


                        <div class="row col-md-12 my-2">

                            <div class="col-md-4 ">

                                <label>Primer Nombre</label>
                                <input type="text" name="prinom" class="form-control" value="<?php if (isset($prinom)) {
                                                                                                    echo $prinom;
                                                                                                } ?>">
                            </div>

                            <div class="col-md-4 mx-2">

                                <label>Segundo Nombre</label>
                                <input type="text" name="segnom" class="form-control" value="<?php if (isset($segnom)) {
                                                                                                    echo $segnom;
                                                                                                } ?>">
                            </div>

                            <div class="col-md-3 ">

                                <label>Email</label>
                                <input type="mail" name="email" class="form-control" value="<?php if (isset($email)) {
                                                                                                echo $email;
                                                                                            } ?>">
                            </div>



                        </div>


                        <div class="row col-md-12 my-2">

                            <div class="col-md-4 ">

                                <label>Celular</label>
                                <input type="num" name="celular" class="form-control" value="<?php if (isset($celular)) {
                                                                                                    echo $celular;
                                                                                                } ?>">
                            </div>

                            <div class="col-md-4 mx-2">

                                <label>Dirección</label>
                                <input type="text" name="direccion" class="form-control" value="<?php if (isset($direccion)) {
                                                                                                    echo $direccion;
                                                                                                } ?>">
                            </div>

                            <div class="col-md-3 ">


                                <label for="">ID Sucursal</label>
                                <select name="idsucursal" class="form-control">
                                    <option value="0">seleccione una sucursal</option>
                                    <?php

                                    include "conexion.php";
                                    $cnx = conexion::conectar();
                                    $sql = "SELECT idsucursal, nomsucursal  FROM sucursal";
                                    $stmt = $cnx->prepare($sql);
                                    $stmt->execute();
                                    $filas = $stmt->fetchAll(PDO::FETCH_OBJ);

                                    foreach ($filas as $i) {

                                    ?>

                                        <option value="<?php print($i->idsucursal); ?>"><?php print($i->nomsucursal); ?></option>


                                    <?php
                                    }

                                    ?>

                                </select>
                            </div>



                        </div>

                        <div class="row col-md-12 my-2">

                            <div class="col-md-3 ">


                                <label for="">ID Cargo</label>
                                <select name="idcargo" class="form-control">
                                    <option value="0">seleccione un cargo</option>
                                    <?php

                                    include "conexion.php";
                                    $cnx = conexion::conectar();
                                    $sql = "SELECT idcargo, nomcargo FROM cargo";
                                    $stmt = $cnx->prepare($sql);
                                    $stmt->execute();
                                    $filas = $stmt->fetchAll(PDO::FETCH_OBJ);

                                    foreach ($filas as $i) {

                                    ?>

                                        <option value="<?php print($i->idcargo); ?>"><?php print($i->nomcargo); ?></option>


                                    <?php
                                    }

                                    ?>

                                </select>

                            </div>

                            <div class="col-md-2 mx-2   ">

                                <label>Ciudad</label>
                                <input type="text" name="ciudad" class="form-control" value="<?php if (isset($ciudad)) {
                                                                                                    echo $ciudad;
                                                                                                } ?>">
                            </div>

                            <div class="col-md-3 mr-2 ">

                                <label>Departamento</label>
                                <input type="text" name="departamento" class="form-control" value="<?php if (isset($departamento)) {
                                                                                                        echo $departamento;
                                                                                                    } ?>">
                            </div>

                            <div class="col-md-3 ">

                                <label>Fecha Contratación</label>
                                <input type="date" name="fecha_contratarcion" class="form-control" value="<?php if (isset($fecha_contratarcion)) {
                                                                                                                echo $fecha_contratarcion;
                                                                                                            } ?>">
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