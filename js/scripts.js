(function (){
    'use strict';

    //input de busqueda
    let buscar = document.querySelector('#busqueda');

    buscar.setAttribute('placeholder', 'Buscar recetas');

    if (document.getElementById('newslater')) {
        
    //campos registro de usuario
    let suscribite = document.querySelector('.newslater a'),
        datosUsuario = document.querySelector('#datos_usuario');

    //campos datos usuario
    let nombre = document.querySelector('#nombre'),
        apellido = document.querySelector('#apellido'),
        email = document.querySelector('#email');

    //eventos
    
    nombre.addEventListener('blur', validarRegistro);
    apellido.addEventListener('blur', validarRegistro);
    email.addEventListener('blur', validarRegistro);
    email.addEventListener('blur', validarEmail);
    suscribite.addEventListener('click', registro);


    //Funciones
/*
    function registro(event){
        event.preventDefault();
        if (suscribite){
            this.style.display = 'none';
            datosUsuario.style.display='block';
        }
    };*/

    function validarRegistro(event){
        event.preventDefault();
        if (this.value === ''){
            alert('Este campo es obligatorio');
            this.style.border='1px solid red';
        }else {
            this.style.border='1px solid #cccccc';
        }
    }

    function validarEmail(event) {
        event.preventDefault();
        if(email.value.indexOf('@') < -1){
            alert('Este campo de llevar una @');
        }
    }
}
})();

$(function (){

    //se agregan atributos al menu de redes dociales

    $('.menu_redes_sociales ul li a:first').attr('href', 'https://www.facebook.com');
    $('.menu_redes_sociales ul li:first').next().children().attr('href', 'https://www.instagram.com/?hl=es-la');
    $('.menu_redes_sociales ul li:first').next().next().children().attr('href', 'https://www.youtube.com');
    $('.sociales .menu_redes_sociales ul li:first').children().attr('href', 'https://www.facebook.com');
    $('.sociales .menu_redes_sociales ul li:first').next().children().attr('href', 'https://www.instagram.com/?hl=es-la');
    $('.sociales .menu_redes_sociales ul li:first').next().next().children().attr('href', 'https://www.youtube.com');


//newslatter
    $('div.newslater a').on('click', function(){
        $(this).hide();
        $('#datos_usuario').show(800);
        $('div.newslater p').animateNumber({number: 80}, 2000);

    });

//menu_principal
    $('nav.navegacion_principal ul li').on('click', function(){
        $('nav.navegacion_principal ul li').removeClass('activo');
       $(this).addClass('activo');
    });

//menu_movil
    $('.menu_movil').on('click', function(){

        $('.navegacion_principal ul').slideToggle(1000);


    });

// se cambia el contenido del footer

    $('div .nosotros h2').text('Incentivate a realizar un cambio');
    $('div .nosotros p').text('Te alimentaras adecuadamente con estas ideas, daras más oportunidad de vida, y haras para ti una nueva oportunidad')


});