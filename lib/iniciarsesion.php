<?php
    
    include_once("conexion.php");
    session_start();

    $email = "administrador@gmail.com";//$_POST['email'];
    $pass = "Password01";//$_POST['password'];

    $conn = new conexion();
    $query ="SELECT Id,Nombre,Email,TipoUsuario FROM Usuario WHERE u.Email = '$email' AND u.Pass = SHA2('$pass',256)";

    $params = array($email,$pass);
    
    $rs = $conn->executeQuery($query,$params);
    $x = $rs[0];

    if($x == null){
        header("location: /ProyectoPHP/public/index.php?error=Usuario y/o Contraseña incorrecto");
    }
    setcookie("Id",$x["Id"]);
    setcookie("Email",$x["Email"]);
    switch($x["TipoUsuario"]){
        case 1:
            $_SESSION['Administrador'] = $x["Nombre"];
            header("location: /ProyectoPHP/restricted/index.php");
            break;
        case 2:
            $_SESSION["Usuario"] = $x["Nombre"];
            header("location: /ProyectoPHP/private/index.php");
            break;
    }
?>