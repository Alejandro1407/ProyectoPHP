<h4 class="grey-text mt-5 mt-md-0 mt-xl-0 mt-lg-0 h4-responsive d-flex justify-content-center">Añadir Representante</h4>
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
<form method="POST" class="w-100" id="RegisterForm">
    <input type="hidden" id="TipoCuenta" value="Empresarial">
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-6">
            <!-- Nombre -->
            <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid"></i>
                    <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid"></i>
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="text" name="Nombres" id="RegisterAccountNombres" class="form-control m-4_5 w-85" placeholder="Nombre"> 
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
                    <input type="text" name="Apellidos" id="RegisterAccountApellidos" class="form-control m-4_5 w-85" placeholder="Apellidos"> 
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
                    <input type="email" name="Email" id="RegisterAccountEmail" class="form-control m-4_5 w-85" placeholder="alguien@example.com"> 
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
                    <input type="text" name="Direccion" id="RegisterAccountDireccion" class="form-control m-4_5 w-85" placeholder="Direccion"> 
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
                    <input type="tel" name="Telefono" id="RegisterAccountTelefono" class="form-control m-4_5 w-85" placeholder="Teléfono"> 
                </div>
            </div>
            <!-- /Telefono -->
            <!-- Edad -->
            <div class="md-form">
            <i class="fas fa-birthday-cake prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid"></i>
                    <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid"></i>
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="number" name="Edad" min="18" max="100" step="1" id="RegisterAccountEdad" class="form-control m-4_5 w-85 validate" placeholder="18"> 
                </div>
            </div>
            <!-- /Edad -->
             <!-- Sexo -->
             <div class="md-form">
            <i class="fas fa-venus-mars prefix grey-text"></i>
                    <select name="Sexo" id="RegisterAccountSexo" class="m-4_5 w-85 custom-control custom-select d-block">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
            </div>
            <!-- /Sexo -->
     <!-- Col-6 -->
        </div>
        <div class="col-12 col-lg-6 col-xl-6 mt-0 pt-0">
            <!-- DUI -->
            <div class="md-form mb-0">
                <i class="fas fa-address-card prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid"></i>
                    <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid"></i>
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="tel" name="DUI" id="RegisterAccountDUI" class="form-control m-4_5 w-85" placeholder="DUI"> 
                </div>
            </div>
            <!-- /DUI -->
            <!-- NIT -->
            <div class="md-form mb-0">
                <i class="fas fa-id-card prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid"></i>
                    <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid"></i>
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="tel" name="NIT" id="RegisterAccountNIT" class="form-control m-4_5 w-85" placeholder="NIT"> 
                </div>
            </div>
            <!-- /NIT -->
             <h5 class="grey-text">Datos de la Empresa</h5>
             <!-- Nombre -->
            <div class="md-form">
                <i class="fas fa-tag prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid"></i>
                    <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid"></i>
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="text" name="EmpNombres" id="RegisterAccountEmpNombres" class="form-control m-4_5 w-85" placeholder="Nombre"> 
                </div>
            </div>
            <!-- /Nombre -->
             <!-- Direccion -->
             <div class="md-form">
                <i class="fas fa-map-marked prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="text" name="EmpDireccion" id="EmpRegisterAccountDireccion" class="form-control m-4_5 w-85" placeholder="Direccion"> 
                </div>
            </div>
            <!-- /Direccion -->
            <!-- Telefono -->
            <div class="md-form mb-0">
                <i class="fas fa-mobile prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <a class="fas fa-asterisk fa-0-5x FormInvalid text-danger mr-4"></a> 
                    <input type="tel" name="EmpTelefono" id="EmpRegisterAccountTelefono" class="form-control m-4_5 w-85" placeholder="Telefono"> 
                </div>
            </div>
            <!-- /Telefono -->
            <!-- Descripcion -->
            <div class="md-form mb-0">
            <i class="fas fa-comment prefix grey-text"></i>
                <div class="inner-addon right-addon">
                    <textarea name="EmpDescripcion" id="EmpRegisterAccountDescripcion" class="form-control m-4_5 w-85" placeholder="Observaciones y/o Descripcion"></textarea>
                </div>
            </div>
            <!-- /Descripcion -->
        <!-- Col-6 -->
        </div>
        <button class="btn btn-success shadow-none ml-auto mr-auto d-block" type="submit"><i class="fas fa-check-circle mr-3"></i>Aceptar</button>
        </form>
    </div>
</div>


<script src="/ProyectoPHP/js/Scripts/Restricted/ScriptAñadirUsuario.js"></script>