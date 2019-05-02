<?php

    include_once("conexion.php");

    $function= $_POST['function'];

    $service = new sesionservicio;

    switch($function){
        case "CheckEmail":
            $service->CheckEmail($_POST['email']);
            break;
    }

    class sesionservicio{

    function CheckEmail($Email){
    
        $conn = new conexion;
        
        $query = "SELECT * FROM usuario WHERE email = $Email AND contrasenya ";
        
        echo 'Called desde ajax';
        
    }

    }

?>