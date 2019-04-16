<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Servicios","Public/StyleServicios"); //Incluye la cabecera e importa los css
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
            <h6 class="grey-text wow slideInUp clear-both"> Las cuentas de ahorro son un tipo de cuenta bancaria 
                en la cual puedes realizar depósitos y retiros en cualquier momento y todas las veces que tú desees.
                 Somos un Banco con gran experiencia, contamos con una amplia cartera de productos y servicios, ...
                 ¡Empieza a construir tus ahorros para el Futuro!</h6>
        </div>
        <div class="col-6">
            <img class="float-left mr-3 mb-5" src="/ProyectoPHP/img/Servicios/Tarjetas.webp" alt="">
            <h4 class="grey-text pt-4">Tarjetas de Credito</h4>
            <h6 class="grey-text wow slideInUp clear-both">
                Tarjetas de crédito .Le invitamos a formar parte de nuestro selecto grupo de tarjeta 
                habientes y gozar de todos los beneficios y ventajas de nuestras tarjeras.
                Viaja; Gana; Ahorra ...  Una tarjeta para quienes viven la vida de otra manera</h6>
        </div>
    </div>

    <div class="bg-white mt-3 panel row">
        <div class="col-6">
            <img class="float-left mr-3 mb-5" src="/ProyectoPHP/img/Servicios/Intereses.webp" alt="">
            <h4 class="grey-text pt-4">Intereses</h4>
            <h6 class="grey-text wow slideInUp clear-both">Conoce las promociones especiales, meses sin intereses, 
                aumento de línea de pagos a largo plazo, no te quedes con las ganas,
                obtén las mejores promociones pagando con tu Tarjeta de Crédito BBVA</h6>
        </div>
        <div class="col-6">
            <img class="float-left mr-1 mb-5" src="/ProyectoPHP/img/Servicios/Inversiones.webp" alt="">
            <h4 class="grey-text pt-4">Inversiones</h4>
            <h6 class="grey-text wow slideInUp clear-both">Aprende más sobre nuestras opciones de inversión y descubre cómo podemos ayudarte a invertir.
                 Brindandote las asesorias necesarios para lograr un mejor manejo de tus fondos</h6>
        </div>
    </div>
    <!-- Fin del contenido del sitio WEB -->
<?php
   base::Scripts("");
   base::Footer(); // Incluye el Footer ademas de los JS
?>
</body>
</html>
