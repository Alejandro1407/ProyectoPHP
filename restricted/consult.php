<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/conexion.php");
    $conn = new conexion;
    $id = $_COOKIE['Id'];
   $rs = $conn->ExecuteQuery("SELECT c.Saldo,CONCAT(u.Nombre,' ',u.Apellidos) AS Nombre,c.NCuenta FROM Cuenta c INNER JOIN Usuario u ON c.IdUsuario = u.Id WHERE c.IdUsuario = ?",array($id));
?>

<table class="table table-striped table-bordered" id="HistorialTable">
    <thead>
        <tr>
            <th>Nombre</th>
            <th># Cuenta</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($rs as $x):?>
        <tr>
            <td><?=$x['Nombre']?></td>
            <td><?=$x["NCuenta"]?></td>
            <td><?=$x["Saldo"]?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<script>
        $('#HistorialTable').DataTable({
            responsive: true
        });
</script>