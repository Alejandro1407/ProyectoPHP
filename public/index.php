<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Home","Public/StyleIndex"); //Incluye la cabecera e importa los css
    base::Header("bg-white","grey-text"); // Muestra el Header del sitio
?>
<body class="mt-5">
    <?php base::ModalLogin(); ?>
    <!-- Inicio del contendio del sitio WEB -->

        <div class="container-fluid wow slideInUp Lato" id="Title">
            <h1 class="white-text font-weight-bold" class="Titulo">Banco Generico</h1>
            <h4 class="white-text font-weight-bold" class="Titulo">Creando oportunidades</h4>
            <div class="ml-auto mr-auto d-block" class="Titulo">
               <a href="" class="btn btn-red" data-toggle="modal" data-target="#modalLoginForm">Comenzar</a>
            </div>
            <br>
        </div>
       
        <div class="bg-white pb-5 panel font-weight-bold pt-5" id="DivServicios">
            <img class="float-xl-left  mr-5 wow slideInUp img-fluid" src="/ProyectoPHP/img/Public/Servicios.png" alt="servicos_icon" width="300" heigth="300">
            <h2 class="black-text font-weight-bold pt-3 grey-text wow slideInUp Lato">Servicios</h2>
            <h5 class="grey-text wow slideInUp"> Nuestra compañia generica ofrece servicios genericos para su disfrute</h5>
        </div>

        <div class="bg-white2 pb-5 pt-5 panel font-weight-bold z-depth-1-half map-container" id="map-container">
        <iframe class="wow fadeInUp pb-5 float-xl-right ml-3" width="325" height="275" src="https://maps.google.com/maps?q=bancos&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <h2 class="black-text font-weight-bold pt-3 grey-text wow slideInUp Lato">Sucursales</h2>
            <h5 class="grey-text wow slideInUp"> Nuestra compañia generica cuenta con muchas sucursales a los largo del pais</h5> 
        </div>

        <div class="bg-white pb-5 panel font-weight-bold pt-5" id="DivSucursales">
                <img class="float-left mr-5 wow slideInUp img-fluid" src="/ProyectoPHP/img/Public/Equipo.png" alt="Equipo" width="300" heigth="300">
                <h2 class="black-text font-weight-bold pt-3 grey-text wow slideInUp Lato">Equipo</h2>
                <h5 class="grey-text wow slideInUp"> Nuestra compañia le asegura que nuestro personal esta altamente capacitado para atender
                todas sus necesidades</h5>
        </div>

        
    <!-- Fin del contenido del sitio WEB -->
<?php
   base::Scripts("Public/ScriptIndex");
   base::Footer(); // Incluye el Footer ademas de los JS
?>
</body>
</html>
