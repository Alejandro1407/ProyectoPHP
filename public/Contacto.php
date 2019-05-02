<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Contacto","Public/StyleContacto"); //Incluye la cabecera e importa los css
    base::Header("bg-white","grey-text"); // Muestra el Header del sitio
?>
<body class="mt-5">
    <?php base::ModalLogin(); ?>
    <!-- Inicio del contendio del sitio WEB -->
    <div id="theDiv">
        <h1 class="white-text text-align-center font-weight-bold" id="Titulo">Contacto</h1>
    </div>
    
    <!---->
    <div class="panel pt-3 row">

        <div class="col-xl-6 col-lg-6 col-sm-12 col-sm-12">
            <h2 class="grey-text">Banco Generico</h2>
            <div class="md-form grey-text">
                <i class="far fa-user prefix"></i>
                <input class="form-control validate" id="Nombre" type="text">
                <label for="Nombre" data-error="Invalido" data-success="">Nombre</label>
            </div>
            <div class="md-form grey-text">
                <i class="far fa-envelope prefix"></i>
                <input class="form-control validate" id="Email" type="email">
                <label for="Email" data-error="Invalido" data-success="">Email</label>
            </div>
            <div class="md-form grey-text">
                <i class="far fa-bookmark prefix"></i>
                <input class="form-control validate" id="Asunto" type="text">
                <label for="Asunto" data-error="Invalido" data-success="">Asunto</label>
            </div>
            <div class="md-form grey-text">
                <i class="far fa-comment prefix"></i>
                <textarea class="form-control validate" id="Asunto" type="text"></textarea>
                <label for="Asunto" data-error="Invalido" data-success="">Mensaje</label>
            </div>
            <button class="btn btn-default ml-auto mr-auto d-block">Enviar</button>
            <br><br>
        </div>
        
        <div class="grey-text col-xl-3 col-lg-3 col-sm-12 col-xs-12 pt-2">
            <h5>Nuestra Direccion</h5>
            <h6 class="pt-4">Alameda Franklin Delano Roosevelt, San Salvador<br>Email: bancogenerico@gmail.com</h6>
        </div>
        <div class="grey-text col-xl-3 col-lg-3 col-sm-12 col-xs-12 pt-2">
            <h5>Llámanos</h5>
            <h6 class="pt-4">Tel: 2555-5555<br>1-800-000-0000<br>Fax: 914-123-456</h6>
            <br><br>
        </div>
        
    </div>
   
    <!-- Fin del contenido del sitio WEB -->
<?php
   base::Scripts("");
   base::Footer(); // Incluye el Footer ademas de los JS
?>
</body>
</html>
