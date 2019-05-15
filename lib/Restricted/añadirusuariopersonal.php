<?php 
define("Raiz",$_SERVER['DOCUMENT_ROOT']);
include_once(Raiz."/ProyectoPHP/lib/conexion.php");

function Responder($Msg,$IsError = true){
        $answertmp = ['Error' => $IsError,
                      'Msg' => $Msg
                     ];
        $answer = json_encode($answertmp);
        echo $answer;
}
/*
$Nombres = "Pedrito"; //$_POST['Nombres'];
$Apellidos = "Perez"; //$_POST['Apellidos'];
$Email = "pedrito7@gmail.com"; //$_POST['Email'];
$Direccion = "Apo";// $_POST['Direccion'];
$Telefono = "7824-1184"; //$_POST['Telefono'];
$Edad = 19;//$_POST['Edad'];
$Sexo ="M"; // $_POST['Sexo'];
$DUI = "12345649-1"; //$_POST['DUI'];
$NIT = "1000-150501-323-1";//$_POST['NIT'];
$EmpNombre = "Juanito SV";//$_POST['EmpNombres'];
$EmpDireccion = "Apopas";// $_POST['EmpDireccion'];
$EmpTelefono ="2216-2662";// $_POST['EmpTelefono'];
$EmpDescripcion = "";// isset($_POST['EmpDescripcion']) ? $_POST['EmpDescripcion'] : "";
*/
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Email = $_POST['Email'];
$Direccion = $_POST['Direccion'];
$Telefono = $_POST['Telefono'];
$Edad = $_POST['Edad'];
$Sexo =$_POST['Sexo'];
$DUI = $_POST['DUI'];
$NIT = $_POST['NIT'];

if($Nombres == "" || is_numeric($Nombres)){
        Responder("Nombres Invalidos");
        return;
}
if($Apellidos == "" || is_numeric($Apellidos)){
        Responder("Apellidos Invalidos");
        return;
}
if($Email == "" || is_numeric($Email) || !preg_match('/^\w{5,}@\w{3,}((\.)[A-Za-z]{2,3}){1,}$/',$Email)){
        Responder("Correo ingresado no valido");
        return;
}
if($Direccion == "" || is_numeric($Direccion)){
        Responder("Direccion ingresada es invalida");
        return;
}
if($Telefono == "" || !preg_match('/^(7|6|2)[0-9]{3}-[0-9]{4}$/',$Telefono) ){
        Responder("Numero de Teléfono invalido");
        return;
}
if($Edad == "" || !is_numeric($Edad) || $Edad < 18){
        Responder("Edad ingresada invalida");
        return;
}
if($DUI == ""  || !preg_match('/^[0-9]{8}-[0-9]$/',$DUI)){
        Responder("DUI Ingresado no es valido");
        return;
}
if($NIT == ""|| !preg_match('/^[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]$/',$NIT)){
        Responder("NIT Ingresado no es valido");
        return;
}

$usu_array = array($Nombres,$Apellidos,$Email,$Direccion,$Telefono,$Edad,$Sexo,$DUI,$NIT);
$conn = new conexion;
$result = $conn->ExecuteUpdate("INSERT INTO Usuario VALUES (NULL,?,?,?,?,?,SHA2('Password01',256),?,?,?,2,?)",$usu_array);
if($result != "true"){
        Responder($result);
        return; 
}
Responder("Usuario creado exitosamente",false);
return;

?>