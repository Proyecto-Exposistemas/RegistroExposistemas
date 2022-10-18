let identidad = document.getElementById("identidad");

let inputIdentidad = document.getElementById("cajaIdentidad");
let inputRol = document.getElementById("cajaRoles")
let inputTelefono = document.getElementById("cajaTelefono")
let inputNumeroControl = document.getElementById("cajaNumeroControl")
let inputSemestre = document.getElementById("cajaSemestre")
let inputTitulo = document.getElementById("cajaTitulo")
let inputRfc = document.getElementById("cajaRfc")
let inputProcedencia = document.getElementById("cajaProcedencia")
let inputFuncion = document.getElementById("cajaFuncion")

let botonEnviar = document.getElementById("enviar")

let circulo = document.getElementById("circulo")

identidad.addEventListener("change", function() {
    seleccion = identidad.value

    if(seleccion == "1") {
        inputRol.style.display = "none"
        inputTelefono.style.display = "grid"
        inputNumeroControl.style.display = "grid"
        inputSemestre.style.display = "grid"
        inputTitulo.style.display = "none"
        inputRfc.style.display = "none"
        inputProcedencia.style.display = "none"
        inputFuncion.style.display = "none"

        /* Modifica la propiedad de un media qwery */
        circulo.style.width = "100%"
    }
    else if(seleccion == "2") {
        inputRol.style.display = "none"
        inputTelefono.style.display = "grid"
        inputNumeroControl.style.display = "none"
        inputSemestre.style.display = "none"
        inputTitulo.style.display = "grid"
        inputRfc.style.display = "grid"
        inputProcedencia.style.display = "none"
        inputFuncion.style.display = "grid"
        /* inputIdentidad.style.display = "none" */
    }
    else if(seleccion == "3") {
        inputRol.style.display = "grid"
        inputTelefono.style.display = "none"
        inputNumeroControl.style.display = "none"
        inputSemestre.style.display = "none"
        inputTitulo.style.display = "none"
        inputRfc.style.display = "grid"
        inputProcedencia.style.display = "grid"
        inputFuncion.style.display = "none"
    }
})

