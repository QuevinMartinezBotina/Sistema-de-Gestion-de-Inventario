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

                        <div class="col-md-6 mr-2">

                            <label>Usuario</label>
                            <input type="text" name="usuario_empleado" class="form-control" value="<?php if (isset($usuario_empleado)) {
                                                                                                        echo $usuario_empleado;
                                                                                                    } ?>">
                        </div>

                        <div class="col-md-5">

                            <label>Contraseña</label>
                            <input type="text" name="contra_empleado" class="form-control" value="<?php if (isset($contra_empleado)) {
                                                                                                        echo $contra_empleado;
                                                                                                    } ?>">
                        </div>


                        <div class="col-md-6 mr-1 my-3">

                            <label>Empleado</label>
                            <!-- <input type="num" name="id_empleado" class="form-control" value="<?php if (isset($id_empleado)) {
                                                                                                    echo $id_empleado;
                                                                                                } ?>"> -->



                            <select name="id_empleado" class="form-control">
                                <option value="0">seleccionar</option>
                                <?php

                                include "conexion.php";
                                $cnx = conexion::conectar();
                                $sql = "SELECT id_empleado, priapell,segapell, prinom  FROM empleado";
                                $stmt = $cnx->prepare($sql);
                                $stmt->execute();
                                $filas = $stmt->fetchAll(PDO::FETCH_OBJ);

                                foreach ($filas as $i) {

                                ?>

                                    <option value="<?php print($i->id_empleado); ?>"><?php print($i->priapell)." "; 
                                                                                            print($i->segapell)." ";
                                                                                            print($i->prinom);
                                    ?></option>


                                <?php
                                }

                                ?>

                            </select>
                        </div>


                        <div class="col-md-3 mr-1 my-3">

                            <label>Cargo</label>
                            <!-- <input type="num" name="nivel_acceso" class="form-control" value="<?php if (isset($nivel_acceso)) {
                                                                                                        echo $nivel_acceso;
                                                                                                    } ?>"> -->


                            <select name="nivel_acceso" class="form-control">
                                <option value="0">seleccionar</option>
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

                        <div class="col-md-2 my-3">

                            <label>Estado</label>
                            <input type="num" name="estado" class="form-control" value="<?php if (isset($estado)) {
                                                                                            echo $estado;
                                                                                        } ?>">
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

                <div class="row">

                </div>
            </div>
        </div>

    </div>

</body>

</html>