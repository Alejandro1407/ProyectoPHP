<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/conexion.php");
    $conn = new conexion;
    $rs = $conn->ExecuteQuery("SELECT c.Ncuenta, u.Nombre,u.Apellidos,u.DUI,tu.TipoUsuario,tc.TipoCuenta FROM Cuenta c INNER JOIN Usuario u ON c.IdUsuario = u.Id INNER JOIN TipoCuenta tc ON c.TipoCuenta = tc.Id INNER JOIN TipoUsuario tu ON u.TipoUsuario = tu.Id");
?>
<table class="table table-striped table-bordered" id="CuentasTable">
    <thead>
        <tr>
            <th># Cuenta</th>
            <th>Nombres</th>
            <th>Apellidos</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($rs as $x):?>
        <tr>
            <td><?=$x["Ncuenta"]?></td>
            <td><?=$x["Nombre"]?></td>
            <td><?=$x["Apellidos"]?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready( function () {
        $('#CuentasTable').DataTable();
    });
</script>