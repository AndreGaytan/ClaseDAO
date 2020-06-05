<?php

 class  Db{

    private static $conexion=NULL;
    
    public function __construct (){}
 
    public static function conectar(){
        try {
            self::$conexion= new mysqli('localhost','root','', 'ejemplo');
            echo 'Yei';
            return self::$conexion;
        }catch(Exception $e){print "¡Error!: " . $e->getMessage() . "<br/>";
            
    }	
}
}
Db::conectar();

?>