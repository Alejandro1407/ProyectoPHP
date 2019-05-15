<h4 class="grey-text mt-5 mt-md-0 mt-xl-0 mt-lg-0 h4-responsive d-flex justify-content-center">Añadir Cuenta Empresarial</h4>
<div class="container">
    <div class="row">
        <div class="col-6">
            <p class="my-3"><span class="text-danger">* </span>Campos Obligatorios</p>
        </div>
        <div class="col-6">
            <a class="btn btn-white shadow-none ml-auto mr-0 d-block" id="btnVolver" href="#"><i class="fas fa-undo mr-3"></i>Volver</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-6">
            <!-- Nombre -->
            <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid"></i>
                    <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid"></i>
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="text" id="RegisterAccountNombre" class="form-control m-4_5 w-85" placeholder="Nombre"> 
                </div>
            </div>
            <!-- /Nombre -->
            <!-- Apellidos -->
            <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid"></i>
                    <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid"></i>
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="text" id="RegisterAccountNombre" class="form-control m-4_5 w-85" placeholder="Apellidos"> 
                </div>
            </div>
            <!-- /Apellidos -->
            <!-- Email -->
              <div class="md-form">
                <i class="fas fa-envelope prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid"></i>
                    <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid"></i>
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="email" id="RegisterAccountNombre" class="form-control m-4_5 w-85" placeholder="alguien@example.com"> 
                </div>
            </div>
            <!-- /Email -->
            <!-- Direccion -->
            <div class="md-form">
                <i class="fas fa-map-marked prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid"></i>
                    <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid"></i>
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="text" id="RegisterAccountNombre" class="form-control m-4_5 w-85" placeholder="Apopas, San Salvador"> 
                </div>
            </div>
            <!-- /Direccion -->
            <!-- Telefono -->
            <div class="md-form mb-0">
                <i class="fas fa-mobile prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid"></i>
                    <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid"></i>
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="tel" id="RegisterAccountNombre" class="form-control m-4_5 w-85" placeholder="2555-5555"> 
                </div>
            </div>
            <!-- /Telefono -->
     <!-- Col-6 -->
        </div>
        <div class="col-12 col-lg-6 col-xl-6 mt-0 pt-0">
            <!-- Edad -->
            <div class="md-form">
            <i class="fas fa-birthday-cake prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid"></i>
                    <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid"></i>
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="number" min="18" max="100" step="1" id="RegisterAccountNombre" class="form-control m-4_5 w-85 validate" placeholder="18"> 
                </div>
            </div>
            <!-- /Edad -->
            <!-- Sexo -->
            <div class="md-form">
            <i class="fas fa-venus-mars prefix grey-text"></i>
                    <select class="m-4_5 w-85 custom-control custom-select d-block">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
            </div>
            <!-- /Sexo -->
        <!-- Col-6 -->
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#btnVolver').on('click',function(){
            $('#Body').load('/ProyectoPHP/restricted/cuentas.php');
        });
      });
</script>