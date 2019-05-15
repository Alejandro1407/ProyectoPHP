<h4 class="grey-text mt-5 mt-md-0 mt-xl-0 mt-lg-0 h4-responsive">Añadir Cuenta Personal</h4>
<div class="container">
    <div class="row">
        <div class="col-6">
            <p class="my-3"><span class="text-danger">* </span>Campos Obligatorios</p>
        </div>
        <div class="col-6">
            <a class="btn btn-white shadow-none ml-auto mr-0 d-block" id="btnVolver" href="#"><i class="fas fa-undo mr-3"></i>Volver</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="md-form">
            <input type="text" id="form1" class="form-control">
            <label for="form1">Example label</label>
            </div>
        </div>
        <div class="col-6">

        </div>
    </div>
</div>




<script>
    $(document).ready(function() {
        $('#btnVolver').on('click',function(){
            $('#Body').load('/ProyectoPHP/restricted/cuentas.php');
        });
      });
</script>