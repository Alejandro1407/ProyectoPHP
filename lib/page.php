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
                                        <input type=\"email\" id=\"LogInFormEmail\" class=\"form-control m-4_5 w-85\" placeholder=\"alguien@example.com\"> 
                                    </div>
                                </div>

                                <div class=\"md-form mb-5\">
                                    <i class=\"fa fa-lock prefix grey-text\"></i>
                                    <div class=\"inner-addon right-addon\">
                                        <i class=\"fas fa-check-circle d-none FormValid\" data-toggle=\"tooltip\" data-placement=\"up\" title=\"contraseña Valida\" id=\"LogInFormPassValid\"></i>
                                        <i class=\"fas fa-times-circle d-none FormInvalid\" data-toggle=\"tooltip\" data-placement=\"up\" title=\"contraseña Invalida\" id=\"LogInFormPassInValid\"></i>
                                        <a class=\"fas fa-eye grey-text mr-4\" id=\"ShowPassLogin\"></a> 
                                        <input type=\"password\" id=\"LogInFormPassword\" class=\"form-control m-4_5 w-85\" placeholder=\"********\"> 
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
    /*
        public static function Sidebar(){

            print("  <!-- Side Bar-->
            <div id=\"SideBar\" class=\"bg-white shadow-md justify-content-center pt-4 pl-4 pr-3 fixed-left\">
                <img class=\"rounded-circle img-fluid float-left mr-2\" width=\"85\" heigth=\"65\" src=\"/ProyectoPHP/img/Restricted/Default.png\" >
                <p class=\"grey-text font-weight-bold pl-4 pb-0 mb-0 pt-3 text-center txt\">Alejandro Alejo</p>
                <p class=\"grey-text pl-4 pt-0 mt-0 font-small text-center txt\">Administrador</p>
        
                <p class=\"grey-text clear-both pl-2 pt-3 mb-1 Lato txt-head\">Main</p>

                <div class=\"pl-2 pt-2 option-menu\" id=\"Dash\">
                    <img src=\"/ProyectoPHP/img/Restricted/DashBoard.png\" class=\"img-fluid mr-3 float-left\">
                    <p class=\"grey-text Lato pt-1 pb-3 mb-1 txt\">DashBoard</p>
                </div>

                <div class=\"pl-2 pt-2 option-menu\" id=\"AddUser\">
                    <img src=\"/ProyectoPHP/img/Restricted/AddUser.png\" width=\"35\" height=\"35\" class=\"img-fluid mr-3 float-left\">
                    <p class=\"grey-text Lato pt-1 pb-3 mb-1 txt\">Agregar Usuario</p>
                </div>

                <div class=\"pl-2 pt-2 option-menu\" id=\"Mail\">
                    <img src=\"/ProyectoPHP/img/Restricted/Mail.png\" class=\"img-fluid mr-3 float-left\" >
                    <p class=\"grey-text Lato pt-1 pb-3 mb-1 txt\">Mail</p>
                </div>
        
                <div class=\"pl-2 pt-2 option-menu\" id=\"Consult\">
                    <img src=\"/ProyectoPHP/img/Restricted/Consulta.png\" class=\"img-fluid mr-3 float-left\">
                    <p class=\"grey-text Lato pt-1 pb-3 mb-1 txt\">Consult</p>
                </div>
        
                <div class=\"pl-2 pt-2 option-menu\" id=\"History\">
                    <img src=\"/ProyectoPHP/img/Restricted/Historial.png\" class=\"img-fluid mr-3 float-left\">
                    <p class=\"grey-text Lato pt-1 pb-3 mb-1 txt\">History</p>
                </div>

                <p class=\"grey-text clear-both pl-2 pt-1 mb-1 Lato txt-head2\">Account</p>
                
                <div class=\"pl-2 pt-2 option-menu\" id=\"Account\">
                    <img src=\"/ProyectoPHP/img/Restricted/Cuenta.png\" class=\"img-fluid mr-3 float-left\">
                    <p class=\"grey-text Lato pt-1 pb-3 txt\">Profile</p>
                </div>
        
            </div>
            ");
        }*/

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

public static function SideBar($Nombre){
    print("
    <div class=\"contenedor-padre\">
    <div class=\"panel\">
        <div class=\"perfil\">
            <li><i class=\"fas fa-user-circle\"></i></li>
            <li><p>$Nombre</p><p>Administrador</p></li>
        </div>
        <div class=\"con_options\">
            <div class=\"options\"> 
                <div class=\"iconos\">
                    <i class=\"fas fa-tools\"></i>
                </div> 
                <div class=\"opt option-menu\" id=\"Dash\" >
                    <p>DashBoard</p>
                </div> 
            </div>
            <div class=\"options\"> 
                <div class=\"iconos\">
                    <i class=\"fas fa-piggy-bank\"></i>
                </div> 
                
                <div class=\"opt\">
                    <p>Retiros</p>
                </div> 
            </div>
            <div class=\"options\"> 
                <div class=\"iconos\">
                    <i class=\"fas fa-question-circle\"></i> 
                </div> 
                <div class=\"opt\">
                    <p>Consultas</p>
                </div> 
            </div>
            <div class=\"options\"> 
                <div class=\"iconos\">
                    <i class=\"fas fa-history\"></i>
                </div> 
                <div class=\"opt\">
                    <p>Historial</p>
                </div> 
            </div>
            <div class=\"options\"> 
                <div class=\"iconos\">
                    <i class=\"fas fa-user-cog\"></i>
                </div> 
                <div class=\"opt\">
                    <p>Perfil</p>
                </div> 
            </div>
        </div>
        <div class=\"foot\">
                <hr>
                <p>BBVA</p>
        </div>
    </div>
    ");
    }

 public static function sidebarCliente($Nombre){
    print("
    <div class=\"contenedor-padre\">
    <div class=\"panel\">
        <div class=\"perfil\">
            <li><i class=\"fas fa-user-circle\"></i></li>
            <li><p>$Nombre</p><p>Cliente</p></li>
        </div>
        <div class=\"con_options\">
            <div class=\"options\"> 
                <div class=\"iconos\">
                <i class=\"fas fa-coins\"></i>
                </div> 
                <div class=\"opt\">
                    <p>Operaciones</p>
                </div> 
            </div>
            <div class=\"options\"> 
                <div class=\"iconos\">
                    <i class=\"fas fa-history\"></i>
                </div> 
                <div class=\"opt\">
                    <p>Historial</p>
                </div> 
            </div>
            <div class=\"options\"> 
                <div class=\"iconos\">
                    <i class=\"fas fa-user-cog\"></i>
                </div> 
                <div class=\"opt\">
                    <p>Perfil</p>
                </div> 
            </div>
        </div>
        <div class=\"foot\">
                <hr>
                <p>BBVA</p>
        </div>
    </div>
    ");
        }

    public static function headAdmin(){
        echo <<<EOOOO
                <header>
                    <p>Banco BBVA</p>
                </header>
EOOOO;
    }

        public static function Scripts($IndexScript,$Script = ""){
            print("
                <!-- Importacion de los Scripts -->
                
                <script src=\"/ProyectoPHP/js/jquery.js\"></script>
                <script src=\"/ProyectoPHP/js/popper.js\"></script>
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