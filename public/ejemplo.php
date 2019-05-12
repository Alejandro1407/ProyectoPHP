<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Home",""); // Incluye la cabecera e importa los css
    base::Header("bg-white","grey-text"); // Muestra el Header del sitio
    base::Scripts("Public/ScriptIndex"); // Incluye los JS Necesarios
    if(isset($_GET['error'])): ?>
        <script>
            toastr.error('Debe authenticarse primero','¡Error!',{
                "progressBar":true,
                "closeButton": true
            });
        </script>
<?php endif;?>
    
    <!-- Inicio del contendio del sitio WEB -->


    <!-- Fin del contenido del sitio WEB -->
<?php
    base::Footer(); // Incluye el Footer ademas de los JS
?>
</body>
</html>
