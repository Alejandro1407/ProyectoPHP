$(document).ready(function(){
    $('#ChangePass').on("click",function() {
        $('#modalChangePass').modal('show');
    });

    $('.ShowPass').on("click",function(e) {
        var Attr = e.target.nextElementSibling.type; //Se obtiene el tipo Actual
        if(Attr === "password"){
            e.target.className = "fas fa-eye-slash grey-text mr-4 ShowPass";
            e.target.nextElementSibling.type = "text";
        }else{
            e.target.className = "fas fa-eye grey-text mr-4 ShowPass";
            e.target.nextElementSibling.type = "password";
        }
    });

    $('.Pass').on('keyup',function(e) {
        console.log();
        e.target.parentNode.children[0].className = "fas fa-check-circle FormValid active"
        e.target.parentNode.children[1].className = "";
    });
});