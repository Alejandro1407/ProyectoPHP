<?php
/*
*     Clase Base
*     Contiene todas las definiciones del <Head> Necesarias
*    Ademas de importar las librerias necesarias para su funcionamiento
*    MDBootStrap,Jquery y FontAwesome
*
*/
   class base {

        public static function Head($Title,$CSS){
            print("
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset='UFT-8'/>
                <title>$Title</title>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <link rel='shortcut icon' type='image/x-icon' href=\"/ProyectoPHP/favicon.ico\">  
                <link href=\"/ProyectoPHP/css/$CSS.css\" rel=\"stylesheet\">
            </head>
            <body>
            ");
        }//Fin de Head
        
        public static function Header($BackGround,$Text){
            print("
            <header>
                <nav class=\"Lato navbar p-1 shadow-none navbar-expand-md $BackGround navbar-light bg-white scrolling-navbar fixed-top\" id=\"TheNavBar\">
                    <div id=\"TheContainer\" class=\"container pl-5 pr-5\">
                           <p class=\"navbar-brand grey-text Lato nav-link pt-3 pb-0 pr-0\">BBVA</p>
                           <!--<img class=\"pr-3\" src=\"/ProyectoPHP/img/logo.png\" width=\"75\" heigth=\"75\">-->
                           <hr class=\"hr-vertical\">
                        <div class=\"collapse navbar-collapse pl-3\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link $Text\" href=\"/ProyectoPHP/public/index.php\">Inicio</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link $Text\" href=\"/ProyectoPHP/public/Servicios.php\">Servicios</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link $Text\" href=\"/ProyectoPHP/public/Nosotros.php\">Nosotros</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link $Text\" href=\"/ProyectoPHP/public/Contacto.php\">Contacto</a>
                                </li>
                            </ul>          
                        </div>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                   </div>
                </nav>
            </header>
            ");
        }//Fin Header

        public static function Footer(){

            print('
                <!-- Footer -->
                <footer class="page-footer font-small red">
                    <div class="footer-copyright text-center py-3">© 2018 Copyright:
                        <a href="">Banco Generico.com</a>
                    </div>
                </footer>

                    <!-- Importacion de los Scripts -->

                <script src="/ProyectoPHP/js/jquery.js"></script>
                <script src="/ProyectoPHP/js/popper.js"></script>
                <script src="/ProyectoPHP/js/bootstrap.js"></script>
                <script src="/ProyectoPHP/js/mdb.js"></script>
                <script src="/ProyectoPHP/js/Scripts/Scriptindex.js"></script>
            ');
        }

    }//Fin de la clase
?>