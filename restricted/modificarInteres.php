<?php

    define("Raiz",$_SERVER['DOCUMENT_ROOT']);
    require_once(Raiz.'/ProyectoPHP/class/interes.class.php');
    require_once(Raiz.'/ProyectoPHP/class/administrarInteres.class.php');
    
    $crud = new CrudInteres();
    $interes = new interes();
    $arreglo = $_POST["id"];
    $listaInteres = $crud->buscar($arreglo);

?>

<form action="administrarInteres.php" id="FormIntereses" method="POST" target="_blank">
    <input type="hidden" name="txtId" value="<?php echo ($listaInteres[0]->getidTipoTransaccion());?>" id="txtId">
    <div class="form-group row">
        <label for="txtTipo" class="col-sm-2 col-form-label">Tipo de Transaccion</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="txtTipo" value="<?php echo ($listaInteres[0]->getTipoTransaccion());?>" id="txtTipo" disabled><br>
        </div>
    </div>
    <div class="form-group row">
        <label for="txtInteres" class="col-sm-2 col-form-label">Interes</label>
        <div class="col-sm-10">
            <input type="number" step='0.01' min='0' max='50' class="form-control" name="txtInteres" value="<?php echo ($listaInteres[0]->getinteres());?>" id="txtInteres"><br>
        </div>
    </div>
    <div class="form-group row">
        <label for="txtGratuitas" class="col-sm-2 col-form-label">Numero de Transacciones Gratuitas por mes</label>
        <div class="col-sm-10">
            <input type="number" min='0' class="form-control" name="txtGratuitas" value="<?php echo ($listaInteres[0]->getnGratuitas());?>" id="txtGratuitas"><br>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" name="actualizar" id="interes" class="btn btn-primary">Actualizar</button>
        </div>
    </div>
</form>

<script>
    $(document).ready( function(){
        $('#interes').click(function(e){
            $('#Body').load("/ProyectoPHP/restricted/interes.php");
        });
        $('#FormIntereses').on('click',function(){


        });
    });
</script>