<h1 style="width:100%; text-align:center">Interes</h1>

<?php
     define("Raiz",$_SERVER['DOCUMENT_ROOT']);
    require_once(Raiz.'/ProyectoPHP/class/interes.class.php');
    require_once(Raiz.'/ProyectoPHP/class/administrarInteres.class.php');

    $crud = new CrudInteres();
    $interes = new interes();
    
    $listaInteres = $crud->mostrar();

    echo "<table id='tablaInteres' class='table table-bordered'>";
    echo <<<EO
        <thead class="thead-light">
            <th>Tipo de Transaccion</th>
            <th>Interes por transaccion</th>
            <th>Numero de transacciones gratuitas mensuales</th>
            <th>Accion</th>
        </thead>
        <tbody>
EO;
    foreach ($listaInteres as $interes) {
        echo "<tr><td style='width:29%'>".$interes->getidTipoTransaccion()."</td>";
        echo "<td style='width:29%'>".$interes->getinteres()."</td>";
        echo "<td style='width:29%'>".$interes->getnGratuitas()."</td>";
        echo "<td style='width:13%'><a class='btn btn-info btn-modificar' id='". $interes->getidTipoTransaccion() ."'>Modificar</a></td>";
        echo "</tr>";
    }
    echo "</tbody/></table>";
?>

<script>
    $(document).ready( function(){
        $('#tablaInteres').DataTable({
            responsive: true
        });
    });
    $('.btn-modificar').on('click',function(e){
        e.preventDefault();
        $('#Body').load('/ProyectoPHP/restricted/modificarInteres.php', { id: e.target.id });
    });
</script>
