<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/conexion.php");
    $conn = new conexion;
    $rs = $conn->ExecuteQuery("SELECT c.Ncuenta, u.Nombre,u.Apellidos,u.DUI,tu.TipoUsuario,tc.TipoCuenta FROM Cuenta c INNER JOIN Usuario u ON c.IdUsuario = u.Id INNER JOIN TipoCuenta tc ON c.TipoCuenta = tc.Id INNER JOIN TipoUsuario tu ON u.TipoUsuario = tu.Id");
?>
<button data-toggle="modal" data-target="#modalDecision" class="btn btn-white shadow-none"><i class="fas fa-user-plus mr-2"></i>Añadir</button>
<table class="table table-striped table-bordered" id="CuentasTable" style="width:100%">
    <thead>
        <tr>
            <th># Cuenta</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>DUI</th>
            <th>Tipo de Usuario</th>
            <th>Tipo de Cuenta</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($rs as $x):?>
        <tr class="hoverable">
            <td><?=$x["Ncuenta"]?></td>
            <td><?=$x["Nombre"]?></td>
            <td><?=$x["Apellidos"]?></td>
            <td><?=$x["DUI"]?></td>
            <td><?=$x["TipoUsuario"]?></td>
            <td><?=$x["TipoCuenta"]?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<script>
     var table = $('#CuentasTable').DataTable({
            responsive: true,
        });
    $(document).ready(function(){
        $('.modal-btn').on('click',function(e){
            $('.modal-backdrop').remove();
            $('body').removeClass("modal-open");
            switch(e.target.id){
                case 'Empresarial':
                    $('#Body').load("/ProyectoPHP/restricted/AñadirCuentaEmpresarial.php");
                break;
                case 'Personal':
                    $('#Body').load("/ProyectoPHP/restricted/AñadirCuentaPersonal.php");
                break;
            }//Switch
        });//Listener
    })//Ready
</script>
<div class="modal fade position-absolute" id="modalDecision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-dialog-centered modal-danger" role="document">
        <div class="modal-content text-center">
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Añadir Cuenta</p>
                </div>
            <div class="modal-body">
                <i class="fas fa-info-circle fa-4x animated rotateIn mb-4"></i>
                <p>¿Que tipo de Cuenta desea añadir?</p>
            </div>
            <div class="modal-footer flex-center">
                <a class="btn btn-success modal-btn" id="Personal">Personal</a>
                <a class="btn btn-success modal-btn" id="Empresarial">Empresarial</a>
            </div>
        </div>
    </div>
</div>