document.getElementById("btn_iniciar-sesión").addEventListener("click", iniciarSesion)
document.getElementById("btn_register").addEventListener("click", registrar)
window.addEventListener("resize", anchoPagina);

//declaracion de variables

var login_registro = document.querySelector(".login-registro")
var formulario_login = document.querySelector(".formulario__login")
var formulario_registrar = document.querySelector(".formulario__registrar")
var o_register = document.querySelector(".o_register")
var o_inicio = document.querySelector(".o_inicio")

function anchoPagina(){
    if(window.innerWidth > 850){
        o_inicio.style.display = "block";
        o_register.style.display = "block";
    }else{
        o_register.style.display = "block";
        o_register.style.opacity = "1";
        o_inicio.style.display = "none";
        formulario_login.style.display = "block",
        formulario_registrar.style.display = "none";
        login_registro.style.left = "0px";
    }
}

anchoPagina();

function iniciarSesion(){
    
    if(window.innerWidth > 850){
        formulario_registrar.style.display = "none";
        login_registro.style.left ="10px";
        formulario_login.style.display ="block";
        o_register.style.opacity = "1";
        o_inicio.style.opacity = "0";
    }else{
        formulario_registrar.style.display = "none";
        login_registro.style.left ="0px";
        formulario_login.style.display ="block";
        o_register.style.display = "block";
        o_inicio.style.display = "none";
    }
    
}

function registrar(){
    if(window.innerWidth > 850){
        formulario_registrar.style.display = "block";
        login_registro.style.left ="410px";
        formulario_login.style.display ="none";
        o_register.style.opacity = "0";
        o_inicio.style.opacity = "1";
    }else{
        formulario_registrar.style.display = "block";
        login_registro.style.left ="0px";
        formulario_login.style.display ="none";
        o_register.style.display = "none";
        o_inicio.style.display = "block";
        o_inicio.style.opacity = "1";

    }
    
}