<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/conexion.php");
    $conn = new conexion;
    $id = $_COOKIE['Id'];
   $rs = $conn->ExecuteQuery("SELECT c.Saldo, c.NCuenta FROM Cuenta c WHERE IdUsuario = ?",array($id));

?>

<table class="table table-striped table-bordered" id="HistorialTable">
    <thead>
        <tr>
            <th>Nombre de cuenta</th>
            <th>Monto total</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($rs as $x):?>
        <tr>
            <td><?=$x["NCuenta"]?></td>
            <td><?=$x["Saldo"]?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<script>
        $('#HistorialTable');
</script>