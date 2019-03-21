<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Dashboard","Private/StyleIndex"); //Incluye la cabecera e importa los css
    base::Header("indigo","white-text"); // Muestra el Header del sitio
?>
<body class="mt-5">
<?php 
    base::Sidebar();
?>
    
    <div class="pt-3 row d-flex justify-content-center" id="DashContent">
        <h3 class="Lato grey-text pl-5 pt-3 pb-3 w-100">Dashboard</h3>

        <div class="col-xl-4 mr-3 mb-3 pt-4 shadow-sm bg-white card">
            <div class="card-title">
                Hola
            </div>
            <div class="card-body">
                        Jelou
            </div>
        </div>
        <div class="col-xl-4 pt-4 mr-3 mb-3 bg-white shadow-sm">
            <div class="card-title">
                Hola
            </div>
            <div class="card-body">
                        Jelou
            </div>
        </div>
        <div class="col-xl-4 pt-4  mb-3 bg-white shadow-sm">
            <div class="card-title">
                Hola
            </div>
            <div class="card-body">
                        Jelou
            </div>
        </div>
        <div class="col-xl-4 pt-4 mr-3 mb-3 bg-white shadow-sm">
            <div class="card-title">
                Hola
            </div>
            <div class="card-body">
                        Jelou
            </div>
        </div>
        <div class="col-xl-4 pt-4 mr-3 mb-3 bg-white shadow-sm">
            <div class="card-title">
                Hola
            </div>
            <div class="card-body">
                        Jelou
            </div>
        </div>
        <div class="col-xl-4 pt-4 mb-3 bg-white shadow-sm">
            <div class="card-title">
                Hola
            </div>
            <div class="card-body">
                        Jelou
            </div>
        </div>
    </div>



<?php
   //base::Footer(); // Incluye el Footer ademas de los JS
?>
</body>
</html>
