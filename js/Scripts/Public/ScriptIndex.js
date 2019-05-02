/*
*  
*   Script que se ejecutara en todas las paginas de public
*
*/
new WOW().init();
var Valid_Email = 0;
var Valid_Pass = 0;
$(document).ready(function(){
    
    $('#LogInFormEmail').on('keyup',function(e){
        CheckEmail(e.target.value,0);
    });
    $('#LogInFormEmail').on("focusout",function (e) { 
        CheckEmail(e.target.value,1);
    });
    $('#LogInFormEmail').on("focus",function () { 
        $('#LogInFormEmailInValid').addClass("d-none");
        $('#LogInFormEmailValid').addClass("d-none");
        $('#LogInFormPassword').val("");
        $('#LogInFormPassword').attr("disabled","disabled");
        $('#LogInFormPassInValid').addClass("d-none");
        $('#LogInFormPassValid').addClass("d-none");
        $('#LogInFormBtn').attr("disabled","disabled");
        Valid_Pass = 0;
     });
     $('#LogInFormPassword').on("keyup",function(e){
        CheckPassword(e.target.value,0);
    });
    $('#LogInFormPassword').on("focusout",function (e) { 
        CheckPassword(e.target.value,1);
    });
    $('#LogInFormBtn').on("click",function(){
        FormLogIn();
    });
    $('#ShowPassLogin').on("click",function() {
        $('#ShowPassLogin').toggleClass("fa-eye");
        $('#ShowPassLogin').toggleClass("fa-eye-slash");
        var Attr = $('#LogInFormPassword').attr("type"); //Se obtiene el metodo Actual
        if(Attr === "password"){
            $('#LogInFormPassword').attr("type","text");
        }else{
            $('#LogInFormPassword').attr("type","password");
        }
    });

});
function CheckEmail(Email,Isfocusout)
{
    var Check_Email = /^\w{5,}@\w{3,}((\.)[A-Za-z]{2,3}){1,}$/g;
    var Check = Check_Email.test(Email);
    console.log(Check); //Debe ser igualada o genera Bug
        if(Check === true){
            $('#LogInFormEmailInValid').addClass("d-none");
            $('#LogInFormEmailValid').removeClass("d-none");
            $('#LogInFormPassword').removeAttr("disabled","disabled");
                    Valid_Email = 1;
                    if(Valid_Email === 1 && Valid_Pass === 1){
                        $('#LogInFormBtn').removeAttr("disabled","disabled");
                    }else{
                        $('#LogInFormBtn').attr("disabled","disabled");
                    }
        }else{
            $('#LogInFormPassValid').addClass("d-none");
            Valid_Email = 0;
            $('#LogInFormPassword').attr("disabled","disabled");
            if(Isfocusout == 1){
                $('#LogInFormEmailInValid').removeClass("d-none");
                return;
            }
        }
}
function CheckPassword(Password,Isfocusout){
    var Check_PassWord = /^[A-Z]{1}((\w){1,})*(\d)$/;
    var password = $('#LogInFormPassword').val();
    var Check = Check_PassWord.test(password);
    if(Check === true){ //Debe ser igualada o genera Bug
       $('#LogInFormPassInValid').addClass("d-none");
       $('#LogInFormPassValid').removeClass("d-none");
        Valid_Pass = 1;
        if(Valid_Email === 1 && Valid_Pass === 1){
            $('#LogInFormBtn').removeAttr("disabled","disabled");
        }else{
            $('#LogInFormBtn').attr("disabled","disabled");
        }
    }else{
        Valid_Pass = 0;
        $('#LogInFormPassValid').addClass("d-none");
        if(Isfocusout == 1){
            $('#LogInFormPassValid').addClass("d-none");
            $('#LogInFormPassInValid').removeClass("d-none");
        }
    }
}