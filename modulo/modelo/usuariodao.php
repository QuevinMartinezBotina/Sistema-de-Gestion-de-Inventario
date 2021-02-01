<?php

include 'conexion.php';

 class UsuarioDao extends Conexion{

    public function insertarUsuario($usuario_empleado, $contra_empleado, $id_empleado, $nivel_acceso,$estado){
        $mensaje="";
  try {
           $conexion=Conexion::conectar();
          $sql="INSERT INTO usuario(usuario_empleado, contra_empleado, id_empleado, nivel_acceso,estado) VALUES (:usuario_empleado, :contra_empleado, :id_empleado, :nivel_acceso,:estado);";
          
          $stmt = $conexion->prepare($sql);	
              $stmt->bindParam(":usuario_empleado", $usuario_empleado);
              $stmt->bindParam(":contra_empleado",$contra_empleado);
              $stmt->bindParam(":id_empleado",$id_empleado); 
              $stmt->bindParam(":nivel_acceso",$nivel_acceso);  
              $stmt->bindParam(":estado",$estado);                

              $stmt->execute();
              $fila=$stmt->rowCount();      
                    $mensaje="Se guardo usuario con exito!!";        
              
  } catch(PDOException $e) {
       
          if ($e->errorInfo[1] == 1062) {
           $mensaje="Usuario Existe!!";
            // duplicate entry, do something else
         } else {
            // an error other than duplicate entry occurred
          echo $e->getMessage();
         }
     
  } 
      return $mensaje;
      }

      public function listausuarios(){
        $conexion=Conexion::conectar();         
        $sql="SELECT * FROM usuario order by id_empleado asc;";      
        $stmt = $conexion->prepare($sql); 
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
       }

       public function listausuario($numid){
        $conexion=Conexion::conectar();         
        $sql="SELECT * FROM usuario where numid=:numid order by numid asc;";      
        $stmt = $conexion->prepare($sql); 
        $stmt->bindParam(":numid", $numid);
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
       }

       public function actualizarUsuario($usuario_empleado, $contra_empleado, $id_empleado, $nivel_acceso,$estado){

        $mensaje="";
        try{
          
          $conexion=Conexion::conectar();
          $sql="update usuario set usuario_empleado=:usuario_empleado,contra_empleado=:contra_empleado,
          id_empleado=:id_empleado,nivel_acceso=:nivel_acceso,estado=:estado where id_empleado=:id_empleado";
          $stmt=$conexion->prepare($sql);
        
          $stmt->bindParam(":usuario_empleado", $usuario_empleado);
          $stmt->bindParam(":contra_empleado",$contra_empleado);
          $stmt->bindParam(":id_empleado",$id_empleado); 
          $stmt->bindParam(":nivel_acceso",$nivel_acceso);  
          $stmt->bindParam(":estado",$estado);   
          $stmt->execute();
          $mensaje="Actualizo Usuario con Exito!!";

        }// fin de try

        catch(PDOException $e){

          $mensaje="Problemas al Actualizar Consulte con el Administrador del Sistema!!";

        }// fin del catch

        return $mensaje;

       }// fin del metodo       


      public function eliminarUsuario($id_empleado){
        $mensaje="";
          try{

            $conexion=Conexion::conectar();
            $sql="delete from usuario where id_empleado=:id_empleado";
            $stmt=$conexion->prepare($sql);
            $stmt->bindParam(":id_empleado",$id_empleado);
            $stmt->execute();
            $mensaje="Eliminó, Usuario con Exito";            

          }// fin del try

          catch(PDOException $e){
            $mensaje="Problemas al Eliminar consulte con el administrador";

          }// fin del catch

          return $mensaje;
      }// fin del metodo eliminarUsuario


      public function eliminarUsuarios(){
        $mensaje="";
          try{

            $conexion=Conexion::conectar();
            $sql="delete from usuario";
            $stmt=$conexion->prepare($sql);
            $stmt->execute();
            $mensaje="Eliminó, Usuarios con Exito";            

          }// fin del try

          catch(PDOException $e){
            $mensaje="Problemas al Eliminar consulte con el administrador";

          }// fin del catch

          return $mensaje;
      }// fin del metodo eliminarUsuario



 }// fn de clase