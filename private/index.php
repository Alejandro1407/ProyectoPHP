<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Home - Private","Private/StyleHome"); //Incluye la cabecera e importa los css
    session_start();
    /*if(!isset($_SESSION['Usuario'])){
        header("location: /ProyectoPHP/public/index.php?error=Debe Autenticarse Primero");
    }*/
    function __autoload($clase){
        require_once("../class/" . $clase . ".class.php");
    }
?>

    <!-- Navbar -->
      <?php
        base::PrivateHeader();
      ?>
    <!-- Navbar -->

    <!-- Sidebar -->
      <?php
        base::SideUserBar($_COOKIE['Nombre'],$_COOKIE['Email']);
      ?>
    <!-- Sidebar -->

  <main class="pt-5 mx-lg-5">
    <div class="container mt-3" id="Body">
       <!--WorkArea-->
        <!-- Tu Programacion Toxica Aqui -->
      <!--/WorkArea-->
    </div>
  </main>
  
<?php
    base::ModalCerrarSesion();
    base::Scripts("Private/ScriptIndex","Private/ScriptHome");
?>


