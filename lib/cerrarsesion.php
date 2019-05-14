<?php
    session_start();

    /* Elimina la sesion y las cookies */
    unset($_SESSION['Administrador']);
    unset($_SESSION['Usuario']);
    setcookie("Id","",time()-60);
    setcookie("Email","",time()-60);

    session_destroy();

    header("location: /ProyectoPHP/public/index.php")
?>