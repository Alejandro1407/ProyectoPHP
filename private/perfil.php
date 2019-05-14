<script src="/ProyectoPHP/js/Scripts/Private/ScriptCuenta.js"></script>

<?php 
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/conexion.php");
    
    $conn = new conexion;
    $Id = $_COOKIE['Id'];
    $rs = $conn->ExecuteQuery("SELECT CONCAT(u.Nombre,' ',u.Apellidos ) AS Nombres, c.NCuenta, u.Email, u.Pass, u.Edad, IF(u.Sexo = 'M','Masculino','Femenino') AS Sexo FROM Usuario u INNER JOIN Cuenta c ON u.Id = c.IdUsuario  WHERE u.Id = $Id");
    $x = $rs[0];
?>
<div class="row">
    <h2 class="grey-text pl-3 Lato w-100">Cuenta</h2>
    <div class="container col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pt-5 pb-5">
        <img class="img-fluid" src="/ProyectoPHP/img/Restricted/Logo.png" alt="">
        <h5 class="grey-text pt-3 Lato">BBVA Banco Bilbao Vizcaya Argentaria </h5>
        <p class="grey-text Lato"> Es un banco español con sede social en Bilbao, presidido por Carlos Torres Vila. Es una de las mayores entidades financieras del mundo y está presente principalmente en España,</p>
    </div>
    <div class="container col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pr-5">
        <h5 class="Lato grey-text">Datos Personales</h5>
        <div class="md-form Lato">
        <i class="fas fa-user prefix grey-text"></i>
            <input class="form-control m-4_5 w-85" name="PNombre" type="text" value="<?=$x["Nombres"]?>" disabled>
            <label for="PNombre"></label>
        </div>
        <div class="md-form Lato">
            <i class="fas fa-money-check prefix grey-text"></i>
            <input class="form-control mr-5 w-85" name="PNombre" type="text" value="<?=$x["NCuenta"]?>" disabled>
            <label for="PNombre"></label>
        </div>
        
        <div class="md-form Lato">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input class="form-control m-4_5 w-85" name="PEmail" type="text" value="<?=$x["Email"]?>" disabled>
            <label for="PNombre"></label>
        </div>
    
    
        <div class="md-form Lato">
            <i class="fa fa-lock prefix grey-text"></i>
            <div class="inner-addon right-addon">
                <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="LogInFormPassValid\"></i>
                <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="LogInFormPassInValid\"></i>
                <i class=" btn shadow-none fas fa-pen grey-text mr-4" id="ChangePass"></i> 
                <input type="password" name="password" id="FormPassword" class="form-control m-4_5 w-85" value="#######" placeholder="*****"> 
            </div>
        </div>


        <div class="md-form Lato">
            <i class="fas fa-birthday-cake prefix grey-text"></i>
            <input class="form-control m-4_5 w-85" name="BirthDay" type="text" value="<?=$x["Edad"]?>" disabled>
            <label for="PNombre"></label>
        </div>

        <div class="md-form Lato">
            <i class="fas fa-venus-mars prefix grey-text"></i>
            <input class="form-control m-4_5 w-85" name="PNombre" type="text" value="<?=$x["Sexo"]?>" disabled>
        </div>
        <button class="btn btn-success" disabled><i class="fas fa-check-circle mr-3"></i>Actualizar</button>
    </div>
</div>


<!-- Modal para cambiar Pass -->

<div class="modal fade" id="modalChangePass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Cambiar Contraseña</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

        <div class="md-form mb-5">
            <i class="fa fa-lock prefix grey-text"></i>
            <div class="inner-addon right-addon">
                <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="FormPassOldValid"></i>
                <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="FormPassOldInValid"></i>
                <a class="fas fa-eye grey-text mr-4 ShowPass" id="ShowOldPass"></a> 
                <input type="password" name="password" id="ChangePassFormOld" class="form-control m-4_5 w-85" placeholder="Antigua contraseña"> 
            </div>
        </div>
        <div class="md-form mb-5">
            <i class="fa fa-lock prefix grey-text"></i>
            <div class="inner-addon right-addon">
                <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="FormPassNew1Valid"></i>
                <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="FormPassNew1InValid"></i>
                <a class="fas fa-eye grey-text mr-4 ShowPass" id="ShowNew2Pass"></a> 
                <input type="password" name="password" id="ChangePassFormNew1" class="form-control m-4_5 w-85 Pass" placeholder="Nueva contraseña"> 
            </div>
        </div>

        <div class="md-form mb-5">
            <i class="fa fa-lock prefix grey-text"></i>
            <div class="inner-addon right-addon">
                <i class="fas fa-check-circle d-none FormValid" data-toggle="tooltip" data-placement="up" title="contraseña Valida" id="FormPassNew2Valid"></i>
                <i class="fas fa-times-circle d-none FormInvalid" data-toggle="tooltip" data-placement="up" title="contraseña Invalida" id="FormPassNew2InValid"></i>
                <a class="fas fa-eye grey-text mr-4 ShowPass" id="ShowNew1Pass"></a> 
                <input type="password" name="password" id="ChangePassFormNew2" class="form-control m-4_5 w-85 Pass"  placeholder="Repetir Nueva"> 
            </div>
        </div>
        
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success"><i class="fas fa-check-circle mr-3"></i>Aceptar</button>
      </div>
      </div>
    </div>
  </div>
</div>
