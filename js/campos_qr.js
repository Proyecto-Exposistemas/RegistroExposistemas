let formulario = document.getElementById("formularioQR");

let noControl = document.querySelector("cajaNumeroControl")
let correo = document.querySelector("cajaCorreo")
/* formulario.addEventListener('submit',function(e){
    e.preventDefault();
    var numero_control = document.getElementById('control').value;
    var rfc = document.getElementById('rfc').value;
    var correo = document.getElementById('correo').value;
    var nivel = document.getElementById('identidad').value;
    var datos = new FormData(formulario);

    if(nivel==1){
        alert("Este es el numero de control"+numero_control); 
    }
    if(nivel==2){
        alert("Este es el rfc"+rfc);
    }
    if(nivel==3){
        alert("Este es el correo"+correo);
    }

    fetch("php/peticion_codigo_aux.php",{
        method:'POST',
        body : datos
    })
    .then(res=>res.json())
    .then(data=>{
        if(data==='No se encontro el numero de control'){
            alert("El numero de control no existe");
        }
        else{
            alert(data);
        }
    })
}) */


function enviarDatosPhp(event){
    event.preventDefault();

    let form = new FormData();
    form.append("noControl", noControl.value)
    form.append("correo", correo.value)

    fetch("/php/peticion_codigo_aux.php",{
        method: "POST",
        body: form
    }).then(response => response.json())
    .then(data =>{
        alert(data.mensaje)
    })
}