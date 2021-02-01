<?php

include 'conexion.php';

class empresaDao extends conexion
{
    public function insertarDatos(
        $id_empresa,
        $nomempresa,
        $representante_legal,
        $actividad_economica,
        $direc_empresa,
        $telefono,
        $email,
        $pais,
        $cuidad,
        $zona
    ) {
        $mensaje = "";
        try {
            $conexion = conexion::conectar();
            $sql = "INSERT INTO empresa(id_empresa, 
                                        nomempresa, 
                                        representante_legal, 
                                        actividad_economica,
                                        direc_empresa,
                                        telefono,
                                        email,
                                        pais,
                                        cuidad,
                                        zona) 
                    VALUES (:id_empresa, 
                                        :nomempresa, 
                                        :representante_legal, 
                                        :actividad_economica,
                                        :direc_empresa,
                                        :telefono,
                                        :email,
                                        :pais,
                                        :cuidad,
                                        :zona)";

            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(":id_empresa", $id_empresa);
            $stmt->bindParam(":nomempresa", $nomempresa);
            $stmt->bindParam(":representante_legal", $representante_legal);
            $stmt->bindParam(":actividad_economica", $actividad_economica);
            $stmt->bindParam(":direc_empresa", $direc_empresa);
            $stmt->bindParam(":telefono", $telefono);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pais", $pais);
            $stmt->bindParam(":cuidad", $cuidad);
            $stmt->bindParam(":zona", $zona);
            $stmt->execute();
            $mensaje = "se creo la empresa correctamente";
        } catch (PDOException $e) {

            if ($e->errorInfo[1] == 1062) {
                $mensaje = "no puedes guardar mas de una empresa";
            } else {
                echo " el error es" . $e->getMessage();
            }
        }

        $stmt = null;
        return $mensaje;
    }


    public function tablaEmpresa()
    {
        $conexion = Conexion::conectar();
        $sql="SELECT * FROM empresa";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $array;
    }

    public function actualizar(
        $id_empresa,
        $nomempresa,
        $representante_legal,
        $actividad_economica,
        $direc_empresa,
        $telefono,
        $email,
        $pais,
        $cuidad,
        $zona
    )
    {
        $mensaje ="";
        try{
            $conexion = Conexion::conectar();
            $sql="UPDATE `empresa` SET id_empresa=:id_empresa, nomempresa=:nomempresa,
                                        representante_legal=:representante_legal,
                                        actividad_economica=:actividad_economica,
                                        direc_empresa=:direc_empresa,
                                        telefono=:telefono,
                                        email=:email,
                                        pais=:pais,
                                        cuidad=:cuidad,
                                        zona=:zona WHERE id_empresa=:id_empresa";

            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(":id_empresa", $id_empresa);
            $stmt->bindParam(":nomempresa", $nomempresa);
            $stmt->bindParam(":representante_legal", $representante_legal);
            $stmt->bindParam(":actividad_economica", $actividad_economica);
            $stmt->bindParam(":direc_empresa", $direc_empresa);
            $stmt->bindParam(":telefono", $telefono);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pais", $pais);
            $stmt->bindParam(":cuidad", $cuidad);
            $stmt->bindParam(":zona", $zona);
            $stmt->execute();
        }catch(PDOException $e) {

            if ($e->errorInfo[1] == 1062) {
                $mensaje = "no puedes actualizar";
            } else {
                echo " el error es" . $e->getMessage();
            }
        }

        $stmt = null;
        return $mensaje;
    
    }

    
}
