(function (){
    'use strict';

    //input de busqueda
    let buscar = document.querySelector('#busqueda');

    buscar.setAttribute('placeholder', 'Buscar receta');

    //Registro Newslatter

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
    function registro(event){
        event.preventDefault();
        if (suscribite){
            this.style.display = 'none';
            datosUsuario.style.display='block';
        }
    };

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

})();