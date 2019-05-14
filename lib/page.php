<?php
/*
*     Clase Base
*     Contiene todas las definiciones del <Head> Necesarias
*     Ademas de importar las librerias necesarias para su funcionamiento
*     MDBootStrap,Jquery y FontAwesome
*
*/
   class base {

        public static function Head($Title,$CSS){
            print("
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset='utf  -8'/>
                <title>$Title</title>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <link rel='shortcut icon' type='image/x-icon' href=\"/ProyectoPHP/favicon.ico\">  
                <link href=\"/ProyectoPHP/css/$CSS.css\" rel=\"stylesheet\">
            </head>
            <body class=\"lighten-3\">
            ");
        }//Fin de Head
        
        public static function Header($BackGround,$Text){
            print("
            <header>
                <nav class=\"Lato navbar p-1 shadow-none navbar-expand-md $BackGround navbar-light bg-white scrolling-navbar fixed-top\" id=\"TheNavBar\">
                    <div id=\"TheContainer\" class=\"container pl-5 pr-5\">
                           <a href=\"/ProyectoPHP/index.php\" class=\"navbar-brand grey-text Lato nav-link pt-2 pb-2 pr-0\">BBVA</a>
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
                        <div class=\"navbar-nav nav-flex-icons ml-auto\" id=\"Sesion\">
                            <a class=\"black-text\" data-toggle=\"modal\" data-target=\"#modalLoginForm\"><span class=\"mr-3\"> <i class=\"fas fa-sign-in-alt\"></i>Entrar</span></a>
                        </div>
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                   </div>
                </nav>
            </header>
            ");
        }//Fin Header
        /* Funciones para el Usuario */
        public static function PrivateHeader(){
            print("<header>
                    <nav class=\"navbar fixed-top navbar-expand-lg navbar-light white d-md-none d-lg-none d-xl-none scrolling-navbar\">
                    <div class=\"container-fluid\">
                        <a class=\"navbar-brand waves-effect\" href=\"/ProyectoPHP/private/index.php\">
                            <strong class=\"blue-text\">BBVA</strong>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link waves-effect option-menu-xs\" id=\"Dash\"  href=\"#\"><i class=\"fas fa-chart-pie mr-3\"></i>DashBoard</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link waves-effect option-menu-xs\" id=\"Saldo\" href=\"#\"><i class=\"fas fa-money-bill-alt mr-3\"></i>Saldo</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link waves-effect option-menu-xs\" id=\"History\"href=\"#\"><i class=\"fas fa-history mr-3\"></i>Historial</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link waves-effect option-menu-xs\" id=\"Account\" href=\"#\"><i class=\"fas fa-user mr-3\"></i>Perfil</a>
                            </li>
                        </ul>
                        <ul class=\"navbar-nav nav-flex-icons\">
                            <li class=\"nav-item\">
                            <a data-toggle=\"modal\" data-target=\"#modalConfirmSesion\"class=\"nav-link btn btn-danger white-text rounded waves-effect\"><i class=\"fas fa-sign-out-alt mr-2\"></i>Cerrar Sesion</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </nav>
                </header>
            ");
        }

        public static function SideUserBar($Nombre,$Email){
            print("    
                    <div class=\"sidebar-fixed position-fixed\">
                        <a class=\"logo-wrapper waves-effect\">
                        <img src=\"/ProyectoPHP/img/Private/Icon.png\" class=\"w-100 img-fluid mb-0\" alt=\"Logo\">
                        </a>
                        <div class=\"list-group list-group-flush\">
                        <h5 class=\"grey-text mx-auto h5-responsive\">$Nombre</h5>
                        <p class=\"grey-text mx-auto\">$Email</p>
                        <a href=\"#\" class=\"list-group-item active waves-effect option-menu\" id=\"Dash\">
                            <i class=\"fas fa-chart-pie mr-3\"></i>Dashboard
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action waves-effect option-menu\" id=\"Saldo\">
                            <i class=\"fas fa-money-bill-alt mr-3\"></i>Saldo
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action waves-effect option-menu\" id=\"History\">
                            <i class=\"fas fa-history mr-3\"></i>Historial
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action waves-effect option-menu\" id=\"Account\">
                            <i class=\"fas fa-user mr-3\"></i>Perfil
                        </a>
                        <a  data-toggle=\"modal\" data-target=\"#modalConfirmSesion\" class=\"list-group-item list-group-item-action waves-effect\">
                            <i class=\"fas fa-sign-out-alt mr-2\"></i>Cerrar Sesion
                        </a>
                        </div>
                    </div>"
                );
        }

        /* Funciones para el Administrador */
        public static function RestrictedHeader(){
            print("<header>
                    <nav class=\"navbar fixed-top navbar-expand-lg navbar-light white d-md-none d-lg-none d-xl-none scrolling-navbar\">
                    <div class=\"container-fluid\">
                        <a class=\"navbar-brand waves-effect\" href=\"/ProyectoPHP/private/index.php\">
                            <strong class=\"blue-text\">BBVA</strong>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link waves-effect option-menu-xs\" id=\"Dash\"  href=\"#\"><i class=\"fas fa-chart-pie mr-3\"></i>DashBoard</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link waves-effect option-menu-xs\" id=\"Deposito\" href=\"#\"><i class=\"fas fa-piggy-bank mr-3\"></i>Depositos</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link waves-effect option-menu-xs\" id=\"Retiros\" href=\"#\"><i class=\"fas fa-hand-holding-usd mr-3\"></i>Retiros</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link waves-effect option-menu-xs\" id=\"Saldo\" href=\"#\"><i class=\"fas fa-money-bill-alt mr-3\"></i>Saldo</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link waves-effect option-menu-xs\" id=\"History\" href=\"#\"><i class=\"fas fa-history mr-3\"></i>Historial</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link waves-effect option-menu-xs\" id=\"Account\" href=\"#\"><i class=\"fas fa-user mr-3\"></i>Perfil</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link waves-effect option-menu-xs\"  id=\"Varios\" href=\"#\"><i class=\"fas fa-clipboard-list mr-3\"></i>Otros</a>
                            </li>
                        </ul>
                        <ul class=\"navbar-nav nav-flex-icons\">
                            <li class=\"nav-item\">
                            <a  data-toggle=\"modal\" data-target=\"#modalConfirmSesion\" class=\"nav-link btn btn-danger white-text rounded waves-effect\"><i class=\"fas fa-sign-out-alt mr-2\"></i>Cerrar Sesion</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </nav>
                </header>
            ");
        }

        public static function SideAdminBar($Nombre,$Email){
            print("    
                    <div class=\"sidebar-fixed position-fixed\">
                        <a class=\"logo-wrapper waves-effect\">
                        <img src=\"/ProyectoPHP/img/Private/Icon.png\" class=\"w-100 img-fluid mb-0\" alt=\"Logo\">
                        </a>
                        <div class=\"list-group list-group-flush\">
                        <h5 class=\"grey-text mx-auto h5-responsive\">$Nombre</h5>
                        <p class=\"grey-text mx-auto\">$Email</p>
                        <a href=\"#\" class=\"list-group-item active waves-effect option-menu\" id=\"Dash\">
                            <i class=\"fas fa-chart-pie mr-3\"></i>Dashboard
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action waves-effect option-menu\" id=\"Deposito\">
                            <i class=\"fas fa-piggy-bank mr-3\"></i>Depositos
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action waves-effect option-menu\" id=\"Retiros\">
                            <i class=\"fas fa-hand-holding-usd mr-3\"></i>Retiros
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action waves-effect option-menu\" id=\"Saldo\">
                            <i class=\"fas fa-money-bill-alt mr-3\"></i>Saldo
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action waves-effect option-menu\" id=\"History\">
                            <i class=\"fas fa-history mr-3\"></i>Historial
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action waves-effect option-menu\" id=\"Account\">
                            <i class=\"fas fa-user mr-3\"></i>Perfil
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action waves-effect option-menu\" id=\"Varios\">
                            <i class=\"fas fa-clipboard-list mr-3\"></i>Otros
                        </a>
                        <a data-toggle=\"modal\" data-target=\"#modalConfirmSesion\" class=\"list-group-item list-group-item-action waves-effect\">
                            <i class=\"fas fa-sign-out-alt mr-2\"></i>Cerrar Sesion
                        </a>
                        </div>
                    </div>"
                );
        }

        public static function ModalLogin(){
            print("<!-- Inicio de sesion-->
            <div class=\"modal fade modal-dialog\" id=\"modalLoginForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <form method=\"POST\" action=\"/ProyectoPHP/lib/iniciarsesion.php\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header text-center\">
                                <h4 class=\"modal-title w-100 font-weight-bold\">Iniciar sesion</h4>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body mx-3\">
                                <div class=\"md-form mb-5\">
                                    <i class=\"fa fa-envelope prefix grey-text\"></i>
                                    <div class=\"inner-addon right-addon\">
                                        <i class=\"fas fa-check-circle d-none FormValid\" data-toggle=\"tooltip\" data-placement=\"up\" title=\"Email Valido\" id=\"LogInFormEmailValid\"></i>
                                        <i class=\"fas fa-times-circle d-none FormInvalid\" data-toggle=\"tooltip\" data-placement=\"up\" title=\"Email No Valido\" id=\"LogInFormEmailInValid\"></i>
                                        <input type=\"email\" id=\"LogInFormEmail\" name=\"email\" class=\"form-control m-4_5 w-85\" placeholder=\"alguien@example.com\"> 
                                    </div>
                                </div>

                                <div class=\"md-form mb-5\">
                                    <i class=\"fa fa-lock prefix grey-text\"></i>
                                    <div class=\"inner-addon right-addon\">
                                        <i class=\"fas fa-check-circle d-none FormValid\" data-toggle=\"tooltip\" data-placement=\"up\" title=\"contraseña Valida\" id=\"LogInFormPassValid\"></i>
                                        <i class=\"fas fa-times-circle d-none FormInvalid\" data-toggle=\"tooltip\" data-placement=\"up\" title=\"contraseña Invalida\" id=\"LogInFormPassInValid\"></i>
                                        <a class=\"fas fa-eye grey-text mr-4\" id=\"ShowPassLogin\"></a> 
                                        <input type=\"password\" name=\"password\" id=\"LogInFormPassword\" class=\"form-control m-4_5 w-85\" placeholder=\"********\"> 
                                    </div>
                                </div>

                            </div>
                            <div class=\"modal-footer d-flex justify-content-center\">
                                <button class=\"btn btn-indigo\" id=\"LogInFormBtn\" disabled><i class=\"fas fa-sign-in-alt\"></i> Iniciar Sesion</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Fin del inicio de sesion-->");
        }

        public static function ModalCerrarSesion(){
            print("
                <div class=\"modal fade position-absolute\" id=\"modalConfirmSesion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-notify modal-danger\" role=\"document\">
                    <div class=\"modal-content text-center\">
                        <!--Header-->
                        <div class=\"modal-header d-flex justify-content-center\">
                        <p class=\"heading\">Cerrar Sesion</p>
                        </div>
                        <div class=\"modal-body\">
                        <i class=\"fas fa-info-circle fa-4x animated rotateIn mb-4\"></i>
                        <p>¿Seguro que desea cerrar la sesion Actual?</p>
                        </div>
                        <div class=\"modal-footer flex-center\">
                        <a href=\"/ProyectoPHP/lib/cerrarsesion.php\" class=\"btn btn-success\">Sí</a>
                        <a class=\"btn btn-danger\" data-dismiss=\"modal\">No</a>
                        </div>
                    </div>
                    </div>
                </div>
            ");
        }

        public static function Footer(){
            print("
                    <!-- Footer -->
                    <footer class=\"page-footer font-small red\">
                        <div class=\"footer-copyright text-center py-3\">© 2018 Copyright:
                            <a href=\"\">Banco Generico.com</a>
                        </div>
                    </footer>
                    ");
        }
        public static function Scripts($IndexScript,$Script = ""){
            print("
                <!-- Importacion de los Scripts -->
                <script src=\"/ProyectoPHP/js/jquery.js\"></script>
                <script src=\"/ProyectoPHP/js/popper.js\"></script>
                <script  src=\"/ProyectoPHP/js/toastr.js\"></script>
                <script src=\"/ProyectoPHP/js/bootstrap.js\"></script>
                <script src=\"/ProyectoPHP/js/mdb.js\"></script>
                <script src=\"/ProyectoPHP/js/Scripts/ScriptIndex.js\"></script>
                <script src=\"/ProyectoPHP/js/Scripts/$IndexScript.js\"></script>
                
            ");
            if($Script != ""){
                print("
                    <script src=\"/ProyectoPHP/js/Scripts/$Script.js\"></script>
                ");
            }
        }
}//Fin de la clase
?>