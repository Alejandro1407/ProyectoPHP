<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/conexion.php");
    $id = $_COOKIE['Id'];
    $conn = new conexion;
    $rs = $conn->ExecuteQuery("SELECT u.NCuenta, c.monto,m.modalidad,c.fecha,tt.tipoTransaccion FROM transacciones c INNER JOIN Cuenta u ON c.idCuenta = u.IdUsuario INNER JOIN tipoTransaccion tt ON c.tipoTransaccion = tt.id INNER JOIN modalidad m ON c.modalidad = m.id ");
?>

<table class="table table-striped table-bordered" id="HistorialTable">
    <thead>
        <tr>
            <th># Cuenta</th>
            <th>Fecha de transaccion</th>
            <th>Modalidad</th>
            <th>Tipo de transaccion</th>
            <th>Monto de la transaccion</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($rs as $x):?>
        <tr>
            <td><?=$X["NCuenta"]?></td>
            <td><?=$x["fecha"]?></td>
            <td><?=$x["tipoTransaccion"]?></td>
            <td><?=$x["modalidad"]?></td>
            <td><?=$x["monto"]?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<script>
        $('#HistorialTable').DataTable();
</script>