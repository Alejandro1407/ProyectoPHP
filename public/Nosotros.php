<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Servicios","Public/StyleNosotros"); //Incluye la cabecera e importa los css
    base::Header("bg-white","grey-text"); // Muestra el Header del sitio
?>
<body class="mt-5">
    <?php base::ModalLogin(); ?>
    <!-- Inicio del contendio del sitio WEB -->

    <div id="theDiv">
        <h1 class="white-text text-align-center font-weight-bold" id="Titulo">Nosotros</h1>
    </div>

    <div class="bg-white panel pt-5">
        <h2 class="grey-text text-align-center font-weight-bold wow fadeInUp pb-3">Banco Generico</h2>
        <h4 class="grey-text Lato">Mision</h4>
        <p class="grey-text wow fadeInUp">
            Somos el principal aliado de nuestros clientes en la satisfacción de sus necesidades financieras,
            con productos innovadores y un elevado nivel de eficiencia y servicio, a través de un equipo comprometido, motivado y de alto desempeño. Generamos valor para nuestros clientes, colaboradores, accionistas y la comunidad.
        </p>
        <h4 class="grey-text Lato">Vision</h4>
        <p class="grey-text wow fadeInUp">
            Ser una organización comprometida con la excelencia, que satisface las necesidades 
            financieras de los clientes, con soluciones integrales e innovadoras.
        </p>
        <br><br>
    </div>
    
    <div class="bg-white2 panel">
        <h2 class="grey-text text-align-center font-weight-bold pt-5 pb-5 wow fadeInUp">Nuestro Equipo</h2>
        <div class="mb-4">
            <img class="img-fluid float-left mr-4 wow fadeInUp" width="95" heigth="94" src="/ProyectoPHP/img/Public/Nosotros/dennis.webp" alt="dennisee">
            <h5 class="Lato pt-4 wow fadeInUp">Dennise Enrique Cruz Inestrosa, Ing. Civil</h5>
            <p class="Lato pt-0 blue-text wow fadeInUp">Dennise@gmail.com | Teléfono: 78829289</p>
            <p class="Lato pt-2 grey-text wowo fadeInUp clear-both">Dennise es nuestro albañil de bases de datos</p>
        </div>
        <div class="mb-3">
            <img class="img-fluid float-left mr-4 wow fadeInUp" width="95" heigth="94" src="/ProyectoPHP/img/Public/Nosotros/Matthew.jpg" alt="dennisee">
            <h5 class="Lato pt-4 wow fadeInUp">Matthew Emilio Gai Ramos, Musul-Man</h5>
            <p class="Lato pt-0 blue-text wow fadeInUp">GaiRamos@gmail.com | Teléfono: 78829289</p>
            <p class="Lato pt-2 grey-text wowo fadeInUp clear-both">¡Allabu Ahbar!</p>
        </div>
        <div class="mb-3">
            <img class="img-fluid float-left mr-4 wow fadeInUp" width="95" heigth="94" src="/ProyectoPHP/img/Public/Nosotros/Marco.jpg" alt="dennisee">
            <h5 class="Lato pt-5 wow fadeInUp">Marco Hernandez Hernandez, Web Developer</h5>
            <p class="Lato pt-0 blue-text wow fadeInUp">michael_hernandez@gmail.com | Teléfono: 78829289</p>
            <p class="Lato pt-2 grey-text wowo fadeInUp clear-both">404 Not Found</p>
        </div>
        <div class="mb-3">
            <img class="img-fluid float-left mr-4 wow fadeInUp" width="95" heigth="94" src="/ProyectoPHP/img/Public/Nosotros/Pablo.jpeg" alt="dennisee">
            <h5 class="Lato pt-5 wow fadeInUp">Javier Ernesto Perez Pablo, Fisico</h5>
            <p class="Lato pt-0 blue-text wow fadeInUp">hawinkg@gmail.com | Teléfono: 78829289</p>
            <p class="Lato pt-2 grey-text wowo fadeInUp clear-both">Sus incapacidades no son un impedimento para progresar</p>
        </div>
        <div class="mb-3">
            <img class="img-fluid float-left mr-4 wow fadeInUp" width="95" heigth="94" src="/ProyectoPHP/img/Public/Nosotros/Alejandro.jpeg" alt="dennisee">
            <h5 class="Lato pt-3 wow fadeInUp">Victor Alejandro Alejo Gálvez, CEO</h5>
            <p class="Lato pt-0 blue-text wow fadeInUp">elmejordobleaa@gmail.com | Teléfono: 78827529</p>
            <p class="Lato pt-2 grey-text wowo fadeInUp clear-both">Lord y señor de este grupo de DSS :v</p>
        </div>
        <br><br>
    </div>
   
    <!-- Fin del contenido del sitio WEB -->
<?php
   base::Scripts("");
   base::Footer(); // Incluye el Footer ademas de los JS
?>
</body>
</html>
