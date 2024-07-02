/* JavaScript para validar el formulario de recuperación de carga */

let formulario = document.getElementById('formulario');
let inputs = document.querySelectorAll('#formulario input');

let expresiones={
    fecha: /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{2}$/,
    tecnico: /^[a-zA-ZÀ-ÿ\s]{4,15}$/
}

let entradas={
    fecha: false,
    tecnico: false
}

function validarFormulario(e){

    switch (e.target.name){
        case "fecha":
            validarEntrada(expresiones.fecha, e.target, "fecha");
        break;
        case "tecnico":
            validarEntrada(expresiones.tecnico, e.target, "tecnico");
        break;
    }
}

function validarEntrada(expresion, input, entrada){

    if(expresion.test(input.value)){    
        entradas[entrada] = true
    }else{
        entradas[entrada] = false
    }
    
    if((entradas.fecha && entradas.tecnico)==true){
   
        btnEnviar = document.querySelector("#enviar");
        btnEnviar.disabled=false;
    }
}
inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

