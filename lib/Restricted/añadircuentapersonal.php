<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/conexion.php");
    $conn = new conexion;

    function Responder($Msg,$IsError = true){
        $answertmp = ['Error' => $IsError,
                    'Msg' => $Msg
                    ];
        $answer = json_encode($answertmp);
        echo $answer;
    }

    $IdUsuario = $_POST['Id'];
    $Saldo = $_POST['Saldo'];
    
    $result =$conn->ExecuteUpdate("INSERT INTO Cuenta(IdUsuario,TipoCuenta,Saldo) VALUES (?,1,?)",array($IdUsuario,$Saldo));

    if($result != "true"){
        Responder($result);
        return;
    }
    Responder("Cuenta agregada exitosamente",false);
    return;
?>