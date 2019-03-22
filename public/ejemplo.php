<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Home"); //Incluye la cabecera e importa los css
    base::Header(); // Muestra el Header del sitio
?>
    
    <!-- Inicio del contendio del sitio WEB -->


    <!-- Fin del contenido del sitio WEB -->
<?php
    base::Footer(""); // Incluye el Footer ademas de los JS
?>
</body>
</html>
