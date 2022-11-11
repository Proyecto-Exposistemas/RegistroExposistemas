
//boton de la ventana modal
const boton_modal =  document.getElementById("confirmar_modal");
boton_modal.addEventListener("click",registrarAlumno);

function registrarAlumno(){

    let form = new FormData(document.getElementById('formulario'));
    fetch("/php/Registro.php",
    {
        method: 'POST',
        body: form,
    })
    .then(response => response.json())
    .then(data => {
        data.error ?showAlert(data.mensaje,true,data.identificador):showAlert(data.mensaje,false,data.identificador);
        modal_container.classList.remove('show');
        limpiarModal();
    });

}

function showAlert(mensaje,error,identificador){
    Toastify({
        text: mensaje,
        duration: 3000,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: error?"linear-gradient(to right, #ff0000, #96c93d)" : "linear-gradient(to right, #00b09b, #96c93d)",
        },
        callback: function() {
            if(identificador !== "no hay"){
            
                window.open("../codigo/imagen_qr.html?identificador="+encodeURIComponent(identificador), '_blank');
            }
             
            Toastify.reposition();
          },
          close: true,
      }).showToast();
}