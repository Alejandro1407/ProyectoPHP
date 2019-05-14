$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); //Inicia Popover
    $('#ChangePass').on("click",function() {
        $('#modalChangePass').modal('show');
    });
    $('.ShowPass').on("click",function(e) {
        e.target.classList.toggle('fa-eye');
        e.target.classList.toggle('fa-eye-slash');
        var Attr = e.target.nextElementSibling.type; //Se obtiene el tipo Actual
        if(Attr === "password"){
            e.target.nextElementSibling.type = "text";
        }else{
            e.target.nextElementSibling.type = "password";
        }
    });
    $('.Pass').on('click',function(e){
        var id = e.target.id;
        $('#'+id).popover('hide');
    });
    $('.Pass').on('keyup',function(e) {
        CheckPassword(e,0);
    });
    $('.Pass').on("focusout",function (e) { 
        CheckPassword(e,1);
    });
    $('#btnAceptar').on('click',function(e){
        var data = [];
        var validData =true;
        var Check_PassWord = /^[A-Z]{1}((\w){1,})*(\d)$/;
        data.push($('#Id').val());
        data.push($('#Pass').val());
        $('.Pass').each(function(){
            data.push($(this)[0].value); //Se guardan los datos en un array
            if($(this)[0].value == "" || Check_PassWord.test($(this)[0].value) == false){
                toastr.error('Complete el campo <b>\"' + $(this)[0].placeholder +'\"</b> para continuar','¡Error!',{
                    "progressBar":true,
                    "closeButton": true
                });
                validData = false;
            }//If
        });//ForEach
        if(validData){
            //console.log(data);
            ActualizarPassword(data);
        }
    });//Funcion
});

function CheckPassword(e,Isfocusout){
    var id = e.target.id;
    $('#'+id).popover('hide');
    var Check_PassWord = /^[A-Z]{1}((\w){1,})*(\d)$/;
    var Check = Check_PassWord.test(e.target.value);
    if(Check === true){ //Debe ser igualada o genera Bug
        e.target.parentNode.children[1].classList.add("d-none"); //Invalid
        e.target.parentNode.children[0].classList.remove("d-none"); //Valid
    }else{
        Valid_Pass = 0;
        e.target.parentNode.children[0].classList.add("d-none"); //Valid
        if(Isfocusout == 1){
            $('#'+id).popover('show');
            e.target.parentNode.children[1].classList.remove("d-none"); //Invalid
        }
    }
}

function ActualizarPassword(data){
    $.ajax({
        type:'POST',
        url:'../lib/cambiarpassword.php',
        data:{Id:data[0],Pass:data[1],OldPass:data[2],NewPass1:data[3],NewPass2:data[4]},
        success:function(temp){
            var answer = JSON.parse(temp)
            if(answer.Error){
                toastr.error(answer.Msg,'¡Error!',{
                    "progressBar":true,
                    "closeButton": true
                });
            }else{
                toastr.success(answer.Msg,'¡Success!',{
                    "progressBar":true,
                    "closeButton": true
                });
                $('#modalChangePass').modal('hide');
            }
        }//Success
    });//Ajax

}
