var actual = $('.sidebar-fixed').find('#Dash');
var actualxs = $('.navbar').find('#Dash');
$(document).ready(function(){
    $('#Body').load("/ProyectoPHP/restricted/cuentas.php");
    $('.option-menu').on('click',function(e){
        console.log(actual);
        actual[0].className = "list-group-item list-group-item-action waves-effect option-menu";
        actual[0] = e.target;
        actual[0].className = "list-group-item active waves-effect option-menu";
        e.preventDefault();
        MostrarPage($(this).attr('id'))
    });
    $('.option-menu-xs').on('click',function(e) {
        actualxs[0].parentNode.classList.remove("active");
        actualxs[0] = e.target;
        actualxs[0].parentNode.classList.add("active");
        e.preventDefault();
        MostrarPage($(this).attr('id'));
     });
    
});

function MostrarPage(id){
    switch (id){
        case 'Dash':
            $('#Body').load("/ProyectoPHP/restricted/dashboard.php");
            break;
        case 'Cuentas':
            $('#Body').load("/ProyectoPHP/restricted/cuentas.php");
            break;
        case 'Deposito':
            $('#Body').load("/ProyectoPHP/restricted/depositos.php");
            break;
        case 'Retiros':
            $('#Body').load("/ProyectoPHP/restricted/retiros.php");
            break;
        case 'AddUser':
            $('#Body').load("/ProyectoPHP/restricted/adduser.php");
            break;
        case 'Saldo':
            $('#Body').load("/ProyectoPHP/restricted/consult.php");
            break;
        case 'History':
            $('#Body').load("/ProyectoPHP/restricted/history.php");
            break;
        case 'Account':
            $('#Body').load("/ProyectoPHP/restricted/account.php");
            break;
        case 'Interes':
            $('#Body').load("/ProyectoPHP/restricted/interes.php");
            break;
    }
}