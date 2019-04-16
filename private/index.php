<?php

    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Bienvenido","Private/StyleIndex"); //Incluye la cabecera e importa los css
    base::Sidebar("Alejandro");

    function __autoload($clase){
        require_once("../class/" . $clase . ".class.php");
    }
?>

<div class="contenedor">
      
            <div class="cuadro">
                <div class="cont-cuadro">
                    <p class="titulo">Consultar Saldo</p><br>
                    <span><i class="fas fa-comments-dollar"></i></span><br><br>
                    <p>Consulta el Saldo</p>
                </div>
            </div>
            <div class="cuadro">
                <div class="cont-cuadro">
                    <p class="titulo">Mensajes</p><br>
                    <span><i class="fas fa-envelope"></i></span><br><br>
                    <p>Consulta los mensajes recibidos</p>
                </div>
            </div>
            <div class="cuadro">
                <div class="cont-cuadro">
                    <p class="titulo">Historial</p><br>
                    <span><i class="fas fa-history"></i></span><br><br>
                    <p>Consulta el Historial de las transtacciones realizadas</p>
                </div>
            </div>
         
        </div>
    </div>

    </body>
</html>