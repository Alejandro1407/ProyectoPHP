<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("BBVA - Dashboard","Restricted/StyleIndex"); //Incluye la cabecera e importa los css
    //base::Header("indigo","white-text"); // Muestra el Header del sitio
?>
<body class="" >
<?php 
    base::Sidebar();
?>

    <article id="Body">
        <!-- Aqui se cargara  la pagina segun se selecciona -->
    </article>

<?php
   base::Footer("Restricted/ScriptRestricted"); // Incluye el Footer ademas de los JS
?>
</body>
</html>