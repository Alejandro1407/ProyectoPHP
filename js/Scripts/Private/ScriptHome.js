var actual = $('.sidebar-fixed').find('#Dash');
var actualxs = $('.navbar').find('#Dash');
$(document).ready(function(){
    $('#Body').load("/ProyectoPHP/private/dashboard.php");
    
    $('.option-menu').on('click',function(e){
        actual[0].className = "list-group-item list-group-item-action waves-effect option-menu";
        actual[0] = e.target;
        actual[0].className = "list-group-item active waves-effect option-menu";
        e.preventDefault();
        MostrarPage($(this).attr('id'));
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
            $('#Body').load("/ProyectoPHP/private/dashboard.php");
            break;;
        case 'Saldo':
            $('#Body').load("/ProyectoPHP/private/consultar.php");
            break;
        case 'History':
            $('#Body').load("/ProyectoPHP/private/historial.php");
            break;
        case 'Account':
            $('#Body').load("/ProyectoPHP/private/perfil.php");
            break;
    }
}