let identidad = document.getElementById("identidad");
let nControl = document.getElementById("cajaNumeroControl");
let correo = document.getElementById("cajaCorreo");

let circulo=document.getElementById("circulo")
let botonEnviar = document.getElementById("enviar")
nControl.style.display = "none"
correo.style.display = "none"
identidad.addEventListener("change", function(){
    seleccion = identidad.value
    if(seleccion == "0"){
        nControl.style.display = "none"
        correo.style.display = "none"
    }
    else if(seleccion == "1"){
        nControl.style.display = "grid"
        correo.style.display = "none"
    }
    else if(seleccion == "3"){
        nControl.style.display = "none"
        correo.style.display = "grid"
    }
})