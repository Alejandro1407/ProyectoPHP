<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Servicios","StyleNosotros"); //Incluye la cabecera e importa los css
    base::Header("bg-white","grey-text"); // Muestra el Header del sitio
?>
<body class="mt-5">
    <!-- Inicio del contendio del sitio WEB -->

    <div id="theDiv">
        <h1 class="white-text text-align-center font-weight-bold" id="Titulo">Nosotros</h1>
    </div>

    <div class="bg-white panel pt-5">
        <h2 class="grey-text text-align-center font-weight-bold wow fadeInUp pb-3">Banco Generico</h2>
        <p class="grey-text wow fadeInUp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis vel incidunt sed, ea deserunt harum sint inventore, ipsam accusamus quaerat et autem dolorum adipisci. Vel nam quidem dolore vitae sit.
         <br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, dolor. Optio id debitis maiores accusamus provident ipsum dolorem repellat ea quia, obcaecati ipsa, quos, libero eos. Excepturi neque delectus quae?
        </p>
    </div>
    
    <div class="bg-white2 panel">
        <h2 class="grey-text text-align-center font-weight-bold pt-5 pb-5 wow fadeInUp">Nuestro Equipo</h2>
        <div class="mb-4">
            <img class="img-fluid float-left mr-4 wow fadeInUp" width="95" heigth="94" src="/ProyectoPHP/img/Nosotros/dennis.webp" alt="dennisee">
            <h5 class="Lato pt-4 wow fadeInUp">Dennise Enrique Cruz Inestrosa, Ing. Civil</h5>
            <p class="Lato pt-0 blue-text wow fadeInUp">Dennise@gmail.com | Teléfono: 78829289</p>
            <p class="Lato pt-2 grey-text wowo fadeInUp clear-both">Dennise es nuestro albañil de bases de datos</p>
        </div>
        <div class="mb-3">
            <img class="img-fluid float-left mr-4 wow fadeInUp" width="95" heigth="94" src="/ProyectoPHP/img/Nosotros/Matthew.jpg" alt="dennisee">
            <h5 class="Lato pt-4 wow fadeInUp">Matthew Emilio Gai Ramos, Musul-Man</h5>
            <p class="Lato pt-0 blue-text wow fadeInUp">GaiRamos@gmail.com | Teléfono: 78829289</p>
            <p class="Lato pt-2 grey-text wowo fadeInUp clear-both">¡Allabu Ahbar!</p>
        </div>
        <div class="mb-3">
            <img class="img-fluid float-left mr-4 wow fadeInUp" width="95" heigth="94" src="/ProyectoPHP/img/Nosotros/Nicco.jpg" alt="dennisee">
            <h5 class="Lato pt-5 wow fadeInUp">Nicolas Ernesto Alas Marroquin, ??</h5>
            <p class="Lato pt-0 blue-text wow fadeInUp">RedSkull@gmail.com | Teléfono: 78829289</p>
            <p class="Lato pt-2 grey-text wowo fadeInUp clear-both">Nicco es parte del grupo</p>
        </div>
        <div class="mb-3">
            <img class="img-fluid float-left mr-4 wow fadeInUp" width="95" heigth="94" src="/ProyectoPHP/img/Nosotros/Marco.jpg" alt="dennisee">
            <h5 class="Lato pt-5 wow fadeInUp">Marco Hernandez Hernandez, Web Developer</h5>
            <p class="Lato pt-0 blue-text wow fadeInUp">michael_hernandez@gmail.com | Teléfono: 78829289</p>
            <p class="Lato pt-2 grey-text wowo fadeInUp clear-both">404 Not Found</p>
        </div>
        <div class="mb-3">
            <img class="img-fluid float-left mr-4 wow fadeInUp" width="95" heigth="94" src="/ProyectoPHP/img/Nosotros/Pablo.jpeg" alt="dennisee">
            <h5 class="Lato pt-5 wow fadeInUp">Javier Ernesto Perez Pablo, Fisico</h5>
            <p class="Lato pt-0 blue-text wow fadeInUp">hawinkg@gmail.com | Teléfono: 78829289</p>
            <p class="Lato pt-2 grey-text wowo fadeInUp clear-both">Sus incapacidades no son un impedimento para progresar</p>
        </div>
        <div class="mb-3">
            <img class="img-fluid float-left mr-4 wow fadeInUp" width="95" heigth="94" src="/ProyectoPHP/img/Nosotros/Alejandro.jpeg" alt="dennisee">
            <h5 class="Lato pt-3 wow fadeInUp">Victor Alejandro Alejo Gálvez, CEO</h5>
            <p class="Lato pt-0 blue-text wow fadeInUp">elmejordobleaa@gmail.com | Teléfono: 78827529</p>
            <p class="Lato pt-2 grey-text wowo fadeInUp clear-both">Lord y señor de este pinshe grupo de DSS :v</p>
        </div>
        <br><br>
    </div>

    <div class="panel">

    </div>
   
    <!-- Fin del contenido del sitio WEB -->
<?php
   base::Footer(); // Incluye el Footer ademas de los JS
?>
</body>
</html>
