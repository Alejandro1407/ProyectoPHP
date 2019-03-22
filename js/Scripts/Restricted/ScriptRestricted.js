$(document).ready(function(){
    $('#Body').load("/ProyectoPHP/restricted/dashboard.php");
    
    $('.option-menu').on('click',function(e){
      MostrarPage($(this).attr('id'))
    });
    
    //Solo esa linea
});

function MostrarPage(id){
    switch (id){
        case 'Dash':
            $('#Body').load("/ProyectoPHP/restricted/dashboard.php");
            break;
        case 'Mail':
            break;
        case 'Consult':
            break;
        case 'History':
            $('#Body').load("/ProyectoPHP/restricted/history.php")
            break;
        case 'Account':
            $('#Body').load("/ProyectoPHP/restricted/account.php");
            break;

    }
}