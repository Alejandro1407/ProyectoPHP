<?php

    define("Raiz",$_SERVER['DOCUMENT_ROOT']);
    require_once(Raiz.'/ProyectoPHP/class/interes.class.php');
    require_once(Raiz.'/ProyectoPHP/class/administrarInteres.class.php');
    

    $crud = new CrudInteres();
    $interes = array();
    
    if (isset($_POST["actualizar"])){
        $interes[] = $_POST["txtInteres"];
        $interes[] = $_POST["txtGratuitas"];
        $interes[] = $_POST["txtId"];

        $crud->actualizar($interes);
        echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
    }

?>