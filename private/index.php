<?php

    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Bienvenido","Private/StyleIndex"); //Incluye la cabecera e importa los css
    base::sidebarCliente("Alejandro");
    function __autoload($clase){
        require_once("../class/" . $clase . ".class.php");
    }
?>

<div class="contenedor">
      
    <div class="cuadro">
        <div class="cont-cuadro">
            <p class="titulo">Consultar Saldo</p>
            <span><i class="fas fa-comments-dollar"></i></span><br><br>
            <p>Consulta el Saldo</p>
        </div>
    </div>
    <div class="cuadro">
        <div class="cont-cuadro">
            <p class="titulo">Mensajes</p>
            <span><i class="fas fa-envelope"></i></span><br><br>
            <p>Consulta los mensajes recibidos</p>
        </div>
    </div>
    <div class="cuadro">
        <div class="cont-cuadro">
            <p class="titulo">Retiros</p>
            <span><i class="fas fa-cash-register"></i></span><br><br>
            <p>Efectuar un Retiro</p>
        </div>
    </div>    
</div>

    </body>
</html>