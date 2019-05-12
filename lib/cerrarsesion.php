<?php
    session_start();

    unset($_SESSION['Administrador']);
    unset($_SESSION['Usuario']);

    session_destroy();

    header("location: /ProyectoPHP/public/index.php")
?>