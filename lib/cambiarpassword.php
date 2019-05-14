<?php

$id = $_POST['Id'];
$Pass = $_POST['Pass'];
$OldPass = $_POST['OldPass'];
$NewPass1 = $_POST['NewPass1'];
$NewPass2 = $_POST['NewPass2'];

if(hash('sha256',$OldPass) != $Pass){
    $obj = ['Error' => true,
            'Msg' => "La contraseña actual del usuario es incorrecta"];
    $json = json_encode($obj);
    echo $json;
    return;
}
if($NewPass1 != $NewPass2){
    $obj = ['Error' => true,
            'Msg' => "Las contraseñas no coinciden"];
    $json = json_encode($obj);
    echo $json;
    return;
}
if($OldPass == $NewPass1){
    $obj = ['Error' => true,
            'Msg' => "La contraseña nueva es igual a la anterior"];
    $json = json_encode($obj);
    echo $json;
    return;
}

try{
    include_once("conexion.php");
    $conn = new conexion;
    $conn->ExecuteUpdate("UPDATE Usuario SET Pass = SHA2('$NewPass1',256) WHERE Id = $id");
    $obj = ['Error' => false,
            'Msg' => "Contraseña Actualizada con exito"];
    $json = json_encode($obj);
    echo $json;
    return;
}catch(Exception $e){
    $obj = ['Error' => true,
    'Msg' => $e->getMessage()];
    $json = json_encode($obj);
    echo $json;
    return;
}

?>