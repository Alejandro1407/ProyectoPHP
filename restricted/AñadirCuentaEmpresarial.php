<?php
    define("Raiz",$_SERVER['DOCUMENT_ROOT']); //Se obtiene la raiz del sitio para facilitar los include
    include_once(Raiz."/ProyectoPHP/lib/conexion.php");
    $conn = new conexion;
    $rs = $conn->ExecuteQuery("SELECT Id,CONCAT(Nombre,' ',Apellidos) AS Nombres,Email FROM Usuario WHERE TipoUsuario = 3");
?>
<h4 class="grey-text mt-5 mt-md-0 mt-xl-0 mt-lg-0 h4-responsive">Añadir Cuenta Empresarial</h4><br>
<label for="" >Usuario:</label><br>
<select name="" id="IdUsuario" class="custom-control custom-select">
    <?php foreach($rs as $x):?>
        <option value="<?=$x['Id']?>"><?=$x['Nombres'] ." | " .$x['Email']?></option>
    <?php endforeach;?>
</select><br><br>

<label for="">Tipo de Cuenta:</label><br>
<h5 class="">Empresarial</h5>

<label for="">Saldo:</label>
<input type="number" id="Saldo" class="form-control" min="100" step="1" value="100"><br>
<button class="btn btn-success" id="btnAccept"><i class="fas fa-check-circle mr-3"></i>Aceptar</button>
<script>
    $(document).ready(function(){
        $('#btnAccept').on('click',function(){
            var idUsuario = $('#IdUsuario').val();
            var Saldo = $('#Saldo').val();
            $.ajax({
                type:'POST',
                url:'/ProyectoPHP/lib/Restricted/añadircuentaempresarial.php',
                data:{ Id:idUsuario,Saldo:Saldo},
                success:function(tempanswer){
                    var answer = JSON.parse(tempanswer);
                     console.log(answer);
                        if(answer.Error){
                            toastr.error(answer.Msg,'¡Error!',{
                                "progressBar":true,
                                "closeButton": true
                            });
                        }else{
                            $('#Body').load('/ProyectoPHP/restricted/cuentas.php');
                            toastr.success(answer.Msg,'¡Success!',{
                                "progressBar":true,
                                "closeButton": true
                            });
                        }
                    }
                
            });
        });

    });
</script>