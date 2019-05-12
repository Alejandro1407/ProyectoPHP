var actual = $('#Dash');
$(document).ready(function(){
    console.log("Work");

    $('#Body').load("/ProyectoPHP/restricted/dashboard.php");
    
    $('.option-menu').on('click',function(e){
        actual[0].className = "list-group-item list-group-item-action waves-effect option-menu";
        actual[0] = e.target;
        actual[0].className = "list-group-item active waves-effect option-menu";
        e.preventDefault();
        MostrarPage($(this).attr('id'))
    });
    
});

function MostrarPage(id){
    switch (id){
        case 'Dash':
            $('#Body').load("/ProyectoPHP/restricted/dashboard.php");
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
        case 'Consult':
            $('#Body').load("/ProyectoPHP/restricted/consult.php");
            break;
        case 'History':
            $('#Body').load("/ProyectoPHP/restricted/history.php");
            break;
        case 'Account':
            $('#Body').load("/ProyectoPHP/restricted/account.php");
            break;
        case 'Varios':
            $('#Body').load("/ProyectoPHP/restricted/varios.php");
            break;
    }
}