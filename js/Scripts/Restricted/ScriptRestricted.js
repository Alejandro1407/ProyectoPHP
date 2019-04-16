$(document).ready(function(){
    $('#Body').load("/ProyectoPHP/restricted/dashboard.php");
    
    $('.option-menu').on('click',function(e){
        MostrarPage($(this).attr('id'))
    });
    
});

function MostrarPage(id){
    switch (id){
        case 'Dash':
            $('#Body').load("/ProyectoPHP/restricted/dashboard.php");
            break;
        case 'Mail':
            $('#Body').load("/ProyectoPHP/restricted/mail.php");
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

    }
}