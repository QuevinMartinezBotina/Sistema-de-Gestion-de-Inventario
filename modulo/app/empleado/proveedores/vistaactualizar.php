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

    <div class="container-fluid mx-md-1">
        <div class="d-flex justify-content-center">
           

            <form action="?action=actualizar" method="post" class="container contenedor-guardar-usuarios animacion-lateral pl-md-5 pt-md-4 ">

                <div class="row">

                    <div class="col-11 mx-1 my-2 text-center">
                        <?php
                        if (empty($mensaje) == false) {

                            echo "<div class='alert alert-warning alert-dismissible fade show'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
             " . $mensaje . "</div>";
                        }
                        ?>

                    </div>

                    <div class="col-md-5 mr-2">

                        <label>ID Proveedor</label>
                        <input type="num" name="id_proveedor" class="form-control" value="<?php if (isset($id_proveedor)) {
                                                                                                echo $id_proveedor;
                                                                                            } ?>">
                    </div>

                    <div class="col-md-6 ">

                        <label>Nombre Proveedor</label>
                        <input type="text" name="nom_proveedor" class="form-control" value="<?php if (isset($nom_proveedor)) {
                                                                                                echo $nom_proveedor;
                                                                                            } ?>">
                    </div>


                    <div class="row my-4">

                        <div class="col-md-3 mr-1">

                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php if (isset($email)) {
                                                                                            echo $email;
                                                                                        } ?>">

                        </div>

                        <div class="col-md-3">

                            <label>Teléfono Proveedor</label>
                            <input type="num" name="tel_proveedor" class="form-control" value="<?php if (isset($tel_proveedor)) {
                                                                                                    echo $tel_proveedor;
                                                                                                } ?>">
                        </div>

                        <div class="col-md-3 mx-1">

                            <label>Dirección Proveedor</label>
                            <input type="text" name="direccion_proveedor" class="form-control" value="<?php if (isset($direccion_proveedor)) {
                                                                                                            echo $direccion_proveedor;
                                                                                                        } ?>">
                        </div>

                        <div class="col-md-2 ">

                            <label>Ciudad </label>
                            <input type="text" name="ciudad" class="form-control" value="<?php if (isset($ciudad)) {
                                                                                                echo $ciudad;
                                                                                            } ?>">

                        </div>
                    </div>


                    <div class="row col-12 mb-3">

                        <div class="col-md-3 ">

                            <label>Estado o Departamento </label>
                            <input type="text" name="estado_departamento" class="form-control" value="<?php if (isset($estado_departamento)) {
                                                                                                            echo $estado_departamento;
                                                                                                        } ?>">
                        </div>


                        <div class="col-md-2 mx-1 ">
                            <label>Banco </label>
                            <input type="text" name="banco" class="form-control" value="<?php if (isset($banco)) {
                                                                                            echo $banco;
                                                                                        } ?>">
                        </div>


                        <div class="col-md-3 mr-1 ">

                            <label>Numero de Cuenta </label>
                            <input type="num" name="cuenta" class="form-control" value="<?php if (isset($cuenta)) {
                                                                                            echo $cuenta;
                                                                                        } ?>">
                        </div>


                        <div class="col-md-3 ">

                            <label>Celular </label>
                            <input type="num" name="celular" class="form-control" value="<?php if (isset($celular)) {
                                                                                                echo $celular;
                                                                                            } ?>">

                        </div>


                    </div>

                </div>

                <div class="my-3">

                    <center>
                        <a type="submit" name="boton" class="btn btn-success   my-2 p-2" href="?action=mostrar">
                            <i class="fas fa-arrow-left"></i> Regresar
                        </a>
                        <button type="submit" name="boton" value="actualizar" class="btn btn-primary my-2 mx-2 p-2" onclick="javascript:return asegurar();">
                            Guardar
                        </button>
                        <button type="submit" name="boton" value="limpiar" class="btn btn-warning my-2 p-2">
                            <i class="fas fa-trash"></i> Limpiar
                        </button>
                    </center>
                </div>
            </form>
        </div>

    </div>
    <script>
        function asegurar() {
            rc = confirm("¿Seguro que desea Actualizar?");
            return rc;
        }
    </script>

</body>

</html>