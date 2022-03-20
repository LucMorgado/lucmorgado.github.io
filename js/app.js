$(document).ready(function(){ 
        redimensionarMenu();

    });

     $(window).resize(function(){ 
         redimensionarMenu();
    });

function redimensionarMenu(){ 
    let hW = $(window).height();
    let wW = $(window).width();
    if(hW < 600) { 
        hW = 600;
    }
$('.menu-lateral').height(hW);
$('.helper-center').css("margin-left", $('.menu-lateral').width() + "px");
}

