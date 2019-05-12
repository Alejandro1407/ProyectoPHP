<?php 
class conexion{
    
    private $conn;

    function __construct(){
        $host="localhost";
        $dbname="SistemaBancario";
        $usuario="root";
        $contra="";

        try{
            @$this->conn = new PDO("mysql:host=$host;dbname=$dbname",$usuario,$contra);
        }catch(Exception $e){
            print ("¡Error!" . $e->getMessage());
            die();
        }
    }  

    function Reconnect(){
        try{
            @$this->conn = new PDO("mysql:host=$host;dbname=$dbname",$usuario,$contra);
        }catch(Exception $e){
            print ("¡Error!" . $e->getMessage());
            die();
        }
    }

    function ExecuteQuery($Query,$params = []){
        try{
            $gsent = $this->conn->prepare($Query); 
            $gsent->execute(array_values($params));
            return $gsent->fetchAll();  
        }catch(Exception $e){
            print("¡Error!" .$e->getMessage());
            die();
        }
    }

    function ExecuteUpdate($Query){
        try{
            $gsent = $this->conn->prepare($Query);
            return $gsent->execute();
        }catch(Exception $e){
            print("¡Error!" .$e->getMessage());
            die();
        }
    }

}
?>