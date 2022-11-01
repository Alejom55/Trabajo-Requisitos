document.getElementById("btn__registrarse").addEventListener("click", register);
document.getElementById("btn__iniciar_sesion").addEventListener("click", login);


//variables
var contenedor_login_register = document.querySelector(".contenedor__login_register");
var formulario_login = document.querySelector(".formualrio__login");
var formulario_register = document.querySelector(".formualrio__register");
var caja_trasera_login = document.querySelector(".caja__trasera_login");
var caja_trasera_register = document.querySelector(".caja__trasera_register");

function register(){

    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "410px";
    formulario_login.style.display = "none";
    caja_trasera_register.style.opacity = "0";
    caja_trasera_login.style.opacity = "1"
}

function login(){

    formulario_register.style.display = "none";
    contenedor_login_register.style.left = "10px";
    formulario_login.style.display = "block";
    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity = "0"
}

//limpia los inputs
function limpiar(){
    document.getElementById("nombre_completo").value = "";
    document.getElementById("correo").value = "";
    document.getElementById("cedula").value = "";
    document.getElementById("contrasena").value = "";
    document.getElementById("confirmar_contrasena").value = "";
    document.getElementById("login_correo").value = "";
    document.getElementById("login_contrasena").value = "";
};
//Cambiar Colores

function PrimerColor(){

    document.getElementById("bodyEspannol").style.background = "#93EFFF";

};

function SegundoColor(){

    document.getElementById("bodyEspannol").style.background = "#00FFDD";
    //document.body.style.background = "#00FFDD"
};

function TercerColor(){

    document.getElementById("bodyEspannol").style.background = "#0375FF";
};

function CuartoColor(){

    document.getElementById("bodyEspannol").style.background = "#FFCA00";
};

onload = function(){ 
    var ele = document.querySelectorAll('.validanumericos')[0];
    ele.onkeypress = function(e) {
       if(isNaN(this.value+String.fromCharCode(e.charCode)))
          return false;
    }
    ele.onpaste = function(e){
       e.preventDefault();
    }
  }

