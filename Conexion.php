<?php

 class  Db{

    private static $conexion=NULL;
    
    public function __construct (){}
 
    public static function conectar(){
        $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
        try {
            self::$conexion= new PDO('mysql:host=localhost;dbname=EJEMPLO', 'root', 'AndreRootP@$$');
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$conexion;
        }catch(PDOException $e){print "¡Error!: " . $e->getMessage() . "<br/>";}
    }	
}

?>