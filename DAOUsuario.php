<?php
require_once 'Conexion.php';
require_once 'Usuario.php';

class DAOUsuario{
 
    public function __construct(){}
    
    public function getUsuarios(){
        $usuarios = array();
        $conn = Db::conectar();
        $sql = "CALL readAllUsuarios ()";
        $resultado=$conn->prepare($sql);    
        /*$resultado->bindParam(1,$id, PDO::PARAM_STR);*/
        
        try{
            $resultado->execute();
            foreach( $resultado as $row ){
                $usuarios[] = $this->addUsuario($row);
            }
            return $usuarios;
        }  catch(PDOException $e){
            print "¡Error!: " . $e->getMessage() . "<br/>";

        }finally{
            $resultado=null;
            $conn=null;
        }
        
    }

    private function addUsuario($row){
        $userID=$row["0"];
        $username=$row["Username"];
        $pwd=$row["Pwd"];
        $nombre=$row["Nombre"];
        $apellido=$row["Apellido"];
        
        /*$userID=$row[0];
        $username=$row[1];
        $pwd=$row[2];
        $nombre=$row[3];
        $apellido=$row[4];*/
        return new Usuario($userID, $username, $pwd, $nombre, $apellido);
    }

    public function getUsuario($id){
        $conn = Db::conectar();
        $sql = "CALL readUsuario(?)";
        $resultado=$conn->prepare($sql);    
        $resultado->bindParam(1,$id, PDO::PARAM_INT);
        
        try{
            $resultado->execute();
            $row= $resultado->fetch(PDO::FETCH_ASSOC);
            $userID = $row["UserID"];
            $username = $row["Username"];
            $pwd = $row["Pwd"];
            $nombre = $row["Nombre"];
            $apellido = $row["Apellido"];
            return $usuario = new Usuario($userID, $username, $pwd, $nombre, $apellido);
        }  catch(PDOException $e){
            print "¡Error!: " . $e->getMessage() . "<br/>";

        }finally{
            $resultado=null;
            $conn=null;
        }
    }
}
?>