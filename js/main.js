

$(function() {

    // Lettering
    $('.nombre-sitio').lettering();
    
    
    // Menu fijo
    
    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if(scroll > (windowHeight/4)) {
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraAltura+'px'});
        } else {
          $('.barra').removeClass('fixed');
          $('body').css({'margin-top': '0px'});
        }
    });
    
    // Menu Responsive
    
    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();
    });

      

    // Reaccionar a Resize en la pantalla
    var breakpoint = 768;
    $(window).resize(function() {
         if($(document).width() >= breakpoint){
           $('.navegacion-principal').show();
         } else {
           $('.navegacion-principal').hide();
         }
    });
    

    // Programa de Conferencias
    $('.cursos-plantillas .info-curso:first').show();
    $('.menu-todos-recursos a:first').addClass('activo');
    
    $('.menu-todos-recursos a').on('click', function() {
          $('.menu-todos-recursos a').removeClass('activo');
          $(this).addClass('activo');
          $('.ocultar').hide();
          var enlace = $(this).attr('href');
          $(enlace).fadeIn(1000);
          return false;
    });
    
    // Animaciones para los Numeros
    var resumenLista = jQuery('.resumen-cursos');
    if(resumenLista.length > 0 ) {
        $('.resumen-cursos').waypoint(function() {
            $('.resumen-cursos li:nth-child(1) p').animateNumber({ number: 0}, 1200);
            $('.resumen-cursos li:nth-child(2) p').animateNumber({ number: 2}, 1200);
            $('.resumen-cursos li:nth-child(3) p').animateNumber({ number: 0}, 1500);
            $('.resumen-cursos li:nth-child(4) p').animateNumber({ number: 1}, 1500);
        }, {
            offset: '60%'
        });
    }


    // Colorbox
    
    $('.invitado-info').colorbox({inline:true, width:"50%"});
    $('.boton_newsletter').colorbox({inline:true, width:"50%"});

});




    
    
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
    


$( "p" ).addClass( "myClass yourClass" );









