var formulario = document.getElementById('formulario_limpiar'); //formulario donde estan el boton y las cajas
var respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', function (e)
{ //el escuchador de eventos
    e.preventDefault(); //de aqui en adelante pones tus procedimientos
    var datos = new FormData(formulario);

    if (confirm("Todos los registros de la base de datos serán eliminados permanentemente ¿Está seguro de que desea hacer eso?")) {
        fetch('php/limpiarBase.php', {
            method: 'POST',
            body: datos
        })
        .then(res => res.json())
        .then(data =>{
            if (data === 'todo chido') {
                alert("La limpieza se ha realizado con éxito");
                location.href = "http://localhost/";
            }

            else {
                alert(data);
            }
        })
    }

    else {
        alert("Limpieza cancelada");
    }
    
})