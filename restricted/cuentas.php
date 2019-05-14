<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/conexion.php");
    $conn = new conexion;
    $rs = $conn->ExecuteQuery("SELECT c.Ncuenta, u.Nombre,u.Apellidos,u.DUI,tu.TipoUsuario,tc.TipoCuenta FROM Cuenta c INNER JOIN Usuario u ON c.IdUsuario = u.Id INNER JOIN TipoCuenta tc ON c.TipoCuenta = tc.Id INNER JOIN TipoUsuario tu ON u.TipoUsuario = tu.Id");
?>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<div class="container">
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
            <tr>
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
</div>
<script>
    $(document).ready(function(){
     var table = $('#CuentasTable').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [{
            text:'Añadir',
            action:function(){
                console.log("CLocked");
            }
        }] 
        });
    })//Ready
</script>