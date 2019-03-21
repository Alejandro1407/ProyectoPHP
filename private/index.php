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
    
    <div class="pt-5 pl-5 row d-flex justify-content-center" id="DashContent">
        <div class="col-xl-5 mr-2 mb-2 pt-4 shadow-sm bg-white card">
            <div class="card-title">
                Hola
            </div>
               <div class="card-body">
                        Jelou
                </div>
            
        </div>
        <div class="col-xl-5 pt-4 mb-2 bg-white shadow-sm">
            <section class="box">
                Jelou
            </section>
        </div>
        <div class="col-xl-5 pt-4 mr-2 mb-2 bg-white shadow-sm">
            <section class="box">
                Jelou
            </section>
        </div>
        <div class="col-xl-5 pt-4 mb-2 bg-white shadow-sm">
            <section class="box">
                Jelou
            </section>
        </div>
    </div>



<?php
   //base::Footer(); // Incluye el Footer ademas de los JS
?>
</body>
</html>
