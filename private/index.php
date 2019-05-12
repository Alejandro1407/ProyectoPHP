<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/page.php");
    base::Head("Bienvenido","Private/StyleHome"); //Incluye la cabecera e importa los css
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
        base::SideUserBar("Alejandro Alejo","alejandroalejo714@gmail.com");
      ?>
    <!-- Sidebar -->

  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5" id="Body">
       <!--WorkArea-->
        <!-- Tu Programacion Toxica Aqui -->
      <!--/WorkArea-->
    </div>
  </main>
  
<?php
    base::Scripts("Private/ScriptIndex","Private/ScriptHome");
?>