<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Home","Public/StyleIndex"); //Incluye la cabecera e importa los css
    base::Header("bg-white","grey-text"); // Muestra el Header del sitio
?>
<body class="mt-5">
<!-- Inicio de sesion-->
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="POST" action="/ProyectoPHP/private/index.php">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Iniciar sesion</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="text" id="defaultForm-email" name="tarjeta" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="defaultForm-email">Numero de cuenta</label>
                            </div>

                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" name="pin" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="defaultForm-pass">Pin</label>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <input type="submit" name="enviar" class="btn btn-default" value="Acceder">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Fin del inicio de sesion-->
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
   base::Scripts("Scriptindex");
   base::Footer(); // Incluye el Footer ademas de los JS
?>
</body>
</html>
