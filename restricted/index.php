<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("BBVA - Dashboard","Restricted/StyleHome"); //Incluye la cabecera e importa los css
    session_start();
    /*if(!isset($_SESSION['Administrador'])){
        header("location: /ProyectoPHP/public/index.php?error=Acceso No Authorizado");
    }*/
?>
<body class="" >
   <!-- Navbar -->
    <?php
        base::RestrictedHeader();
    ?>
    <!-- Navbar -->

    <!-- Sidebar -->
    <?php
        base::SideAdminBar($_COOKIE['Nombre'],$_COOKIE['Email']);
    ?>
    <!-- Sidebar -->

    <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-3" id="Body">
       <!--WorkArea-->
        <!-- Tu Programacion Toxica Aqui -->
      <!--/WorkArea-->
    </div>
  </main>

<?php
   base::ModalCerrarSesion();
   base::Scripts("Restricted/ScriptIndex","Restricted/ScriptHome"); // Incluye los JS
?>
</body>
</html>
