<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Servicios","StyleServicios"); //Incluye la cabecera e importa los css
    base::Header("bg-white","grey-text"); // Muestra el Header del sitio
?>
<body class="mt-5">
    <!-- Inicio del contendio del sitio WEB -->

    <div id="theDiv">
        <h1 class="white-text text-align-center font-weight-bold" id="Titulo">Servicios</h1>
    </div>
    <div class="bg-white panel pt-5 row">
        <div class="col-6">
            <img class="float-left mr-3 mb-5" src="/ProyectoPHP/img/Servicios/Ahorros.webp" alt="">
            <h4 class="grey-text pt-4">Ahorros</h4>
            <h6 class="grey-text wow slideInUp clear-both"> Ahorre con nosotros no se arrepentira</h6>
        </div>
        <div class="col-6">
            <img class="float-left mr-3 mb-5" src="/ProyectoPHP/img/Servicios/Tarjetas.webp" alt="">
            <h4 class="grey-text pt-4">Tarjetas de Credito</h4>
            <h6 class="grey-text wow slideInUp clear-both"> Nuestro banco generico le ofrece multiples tarjetas de credto</h6>
        </div>
    </div>

    <div class="bg-white panel row">
        <div class="col-6">
            <img class="float-left mr-3 mb-5" src="/ProyectoPHP/img/Servicios/Intereses.webp" alt="">
            <h4 class="grey-text pt-4">Intereses</h4>
        </div>
        <div class="col-6">
            <img class="float-left mr-3 mb-5" src="/ProyectoPHP/img/Servicios/Inversiones.webp" alt="">
            <h4 class="grey-text pt-4">Inversiones</h4>
        </div>
    </div>
    <!-- Fin del contenido del sitio WEB -->
<?php
   base::Footer(); // Incluye el Footer ademas de los JS
?>
</body>
</html>
