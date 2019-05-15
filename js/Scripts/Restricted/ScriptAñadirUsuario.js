$(document).ready(function() {
    $('#btnVolver').on('click',function(){
        $('#Body').load('/ProyectoPHP/restricted/cuentas.php');
    });
    $('#RegisterForm').on('submit',function(e){
        e.preventDefault();
        var tempurl = $('#TipoCuenta').val();
        var url = "/ProyectoPHP/lib/Restricted/";
        if(tempurl == "Personal"){url += "añadirusuariopersonal.php";}else{url += "añadirusuarioempresarial.php";}
        var data = $(this).serializeArray();
        console.log(url);
        console.log(data);
        $.ajax({
            type:'POST',
            url:url,
            data:data,
            success:function(temp) {
                var answer = JSON.parse(temp);
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
        });//Ajax
    });//Listener
  });//Ready