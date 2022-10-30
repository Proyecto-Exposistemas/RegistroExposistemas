
/* Seccion para ingresar los datos a los arreglos */
let nombre_completo = [];
let numeros_control = [];
let nombre_completo_asesores = [];
let rfc_asesores = [];

let contenedor = document.querySelector('.options-container');
let contenedor2 = document.querySelector('.options-container2');

Archivos();

for (let i = 0; i < nombre_completo.length; i++) {
  contenedor.innerHTML += '<div class=\"option\" style=\"display: block;\"> <input type=\"radio\" class=\"radio\" id=\"' + numeros_control[i] + '\" name=\"expositoresParticipantes\" > <label for=\"' + numeros_control[i] + '\"id=\"etiqueta\" >' + nombre_completo[i] + '</label> </div>';
}

for (let j = 0; j < nombre_completo_asesores.length; j++) {
  contenedor2.innerHTML += '<div class=\"option2\" style=\"display: block;\"> <input type=\"radio\" class=\"radio\" id=\"' + rfc_asesores[j] + '\" name=\"asesoresParticipantes\" > <label for=\"' + rfc_asesores[j] + '\"id=\"etiqueta\" >' + nombre_completo_asesores[j] + '</label> </div>';
}

/* Seccion para mandar los datos a la lista lateral y eliminarlos */
let nombre_completo2 = nombre_completo;
let numeros_control2 = numeros_control;
let nombre_completo_asesores2 = nombre_completo_asesores;
let rfc_asesores2 = rfc_asesores;

let listaOpciones = document.querySelectorAll('.option');
let listaOpciones2 = document.querySelectorAll('.option2');

let listaNombres = [];
let listaNumeros = [];
let listaContador = [];

let listaNombresAsesores = [];
let listaRfcAsesores = [];
let listaContadorAsesores = [];

let nombresLista = document.querySelector('.containerP');
let nombresLista2 = document.querySelector('.container2P');

listaOpciones.forEach(o => {
  o.addEventListener('click', (e) => {
    let valorTexto = e.target.textContent;

    /* Si el valor del texto es diferente de vacio, entonces */
    if (valorTexto != '') {

      if (valorTexto[0] == ' ') {

        let valorTexto2 = valorTexto.trim();
        valorTexto = valorTexto2;

        /* Verifica que valorTexto no exista en el arreglo */
        let flag = false;
        for (let i = 0; i < listaNombres.length; i++) {
          if (listaNombres[i] == valorTexto) {
            flag = true;
          }
        }

        /* Si el valor no existe en el arreglo, entonces */
        if (flag == false) {

          /* Agrega el valor al arreglo */
          listaNombres.push(valorTexto);

          let posicion_numero = 0

          for (let i = 0; i < nombre_completo2.length; i++) {
            if (nombre_completo2[i] == valorTexto) {
              posicion_numero = i;
            }
          }

          /* Agrega el valor al arreglo */
          listaNumeros.push(numeros_control2[posicion_numero]);

          /* cuenta los elementos de la lista */
          let contador = listaNombres.length;

          /* Agrega el valor al div */
          nombresLista.innerHTML += '<div class=\"nombres\" id=\"contenedor' + contador + '\"> <p class=\"nombreExpoenente\">' + valorTexto + '</p> <button class=\"btnEliminar\" type\"submit\" name=\"btnEliminar' + contador + '\" onClick=eliminar(\"contenedor' + contador + '\")><ion-icon name=\"backspace-outline\" class=\"iconoBoton\"></ion-icon></button> </div>';

          /* Agregar a listaContador */
          listaContador.push('contenedor' + contador);

          console.log(listaNombres);
          console.log(listaNumeros);
          console.log(listaContador);
        }
        else {
          console.log('Estamos en el tercer condicional al validar que si existe el valor en el arreglo')
          alert('El nombre ya existe en la lista');
        }
      }
      else {

        /* Verifica que valorTexto no exista en el arreglo */
        let flag = false;
        for (let i = 0; i < listaNombres.length; i++) {
          if (listaNombres[i] == valorTexto) {
            flag = true;
          }
        }

        /* Si el valor no existe en el arreglo, entonces */
        if (flag == false) {

          /* Agrega el valor al arreglo */
          listaNombres.push(valorTexto);

          let posicion_numero = 0

          for (let i = 0; i < nombre_completo2.length; i++) {
            if (nombre_completo2[i] == valorTexto) {
              posicion_numero = i;
            }
          }

          /* Agrega el valor al arreglo */
          listaNumeros.push(numeros_control2[posicion_numero]);

          /* cuenta los elementos de la lista */
          let contador = listaNombres.length;

          /* Agrega el valor al div */
          nombresLista.innerHTML += '<div class=\"nombres\" id=\"contenedor' + contador + '\"> <p class=\"nombreExpoenente\">' + valorTexto + '</p> <button class=\"btnEliminar\" type\"submit\" name=\"btnEliminar' + contador + '\" onClick=eliminar(\"contenedor' + contador + '\")><ion-icon name=\"backspace-outline\" class=\"iconoBoton\"></ion-icon></button> </div>';

          /* Agregar a listaContador */
          listaContador.push('contenedor' + contador);

          console.log(listaNombres);
          console.log(listaNumeros);
          console.log(listaContador);
        }
        else {
          console.log('Estamos en el tercer condicional al validar que si existe el valor en el arreglo')
          alert('El nombre ya existe en la lista');
        }
      }
    }
  });
  /* Guardar los arreglos en variables que sirvan para php */

});

listaOpciones2.forEach(h => {
  h.addEventListener('click', (E) => {
    let valorTexto3 = E.target.textContent;

    /* Si el valor del texto es diferente de vacio, entonces */
    if (valorTexto3 != '') {

      if (valorTexto3[0] == ' ') {
        console.log('Condicional por espaciado.');

        let valorTexto4 = valorTexto3.trim();
        valorTexto3 = valorTexto4;

        /* Verifica que valorTexto no exista en el arreglo */
        let flag = false;
        for (let i = 0; i < listaNombresAsesores.length; i++) {
          if (listaNombresAsesores[i] == valorTexto3) {
            flag = true;
          }
        }

        /* Si el valor no existe en el arreglo, entonces */
        if (flag == false) {

          /* Agrega el valor al arreglo */
          listaNombresAsesores.push(valorTexto3);

          let posicion_numero2 = 0

          for (let i = 0; i < nombre_completo_asesores2.length; i++) {
            if (nombre_completo_asesores2[i] == valorTexto3) {
              posicion_numero2 = i;
            }
          }

          /* Agrega el valor al arreglo */
          listaRfcAsesores.push(rfc_asesores2[posicion_numero2]);

          /* cuenta los elementos de la lista */
          let contador2 = listaNombresAsesores.length;

          /* Agrega el valor al div */
          nombresLista2.innerHTML += '<div class=\"nombres\" id=\"contenedor2' + contador2 + '\"> <p class=\"nombreAsistente\">' + valorTexto3 + '</p> <button class=\"btnEliminar\" type\"submit\" name=\"btn2Eliminar' + contador2 + '\" onClick=eliminar(\"contenedor2' + contador2 + '\")><ion-icon name=\"backspace-outline\" class=\"iconoBoton\"></ion-icon></button> </div>';

          /* Agregar a listaContador */
          listaContadorAsesores.push('contenedor2' + contador2);

          console.log(listaNombresAsesores);
          console.log(listaRfcAsesores);
          console.log(listaContadorAsesores);
        }

        else {
          alert('El nombre ya existe en la lista');
        }
      }
      else {
        console.log('Condicional sin espaciado.');

        /* Verifica que valorTexto no exista en el arreglo */
        let flag = false;
        for (let i = 0; i < listaNombresAsesores.length; i++) {
          if (listaNombresAsesores[i] == valorTexto3) {
            flag = true;
          }
        }

        /* Si el valor no existe en el arreglo, entonces */
        if (flag == false) {

          /* Agrega el valor al arreglo */
          listaNombresAsesores.push(valorTexto3);

          let posicion_numero2 = 0

          for (let i = 0; i < nombre_completo_asesores2.length; i++) {
            if (nombre_completo_asesores2[i] == valorTexto3) {
              posicion_numero2 = i;
            }
          }

          /* Agrega el valor al arreglo */
          listaRfcAsesores.push(rfc_asesores2[posicion_numero2]);

          /* cuenta los elementos de la lista */
          let contador2 = listaNombresAsesores.length;

          /* Agrega el valor al div */
          listaNombresAsesores.innerHTML += '<div class=\"nombres\" id=\"contenedor2' + contador2 + '\"> <p class=\"nombreAsistente\">' + valorTexto3 + '</p> <button class=\"btnEliminar\" type\"submit\" name=\"btn2Eliminar' + contador2 + '\" onClick=eliminarAsesores(\"contenedor2' + contador2 + '\")><ion-icon name=\"backspace-outline\" class=\"iconoBoton\"></ion-icon></button> </div>';

          /* Agregar a listaContador */
          listaContadorAsesores.push('contenedor2' + contador2);

          console.log(listaNombresAsesores);
          console.log(listaRfcAsesores);
          console.log(listaContadorAsesores);

        }
        else {
          console.log('Estamos en el tercer condicional al validar que si existe el valor en el arreglo')
          alert('El nombre ya existe en la lista');
        }
      }
    }
  });
});

function eliminar(id) {
  document.getElementById(id).remove();

  console.log('El id es: ' + id);

  /* Eliminación de los campos de manera correcta en la lista */
  for (let i = 0; i < listaContador.length; i++) {
    if (listaContador[i] == id) {
      listaNumeros.splice(i, 1);
      listaNombres.splice(i, 1);
      listaContador.splice(i, 1);
    }
  }

  for (let i = 0; i < listaContadorAsesores.length; i++) {
    if (listaContadorAsesores[i] == id) {
      listaNombresAsesores.splice(i, 1);
      listaRfcAsesores.splice(i, 1);
      listaContadorAsesores.splice(i, 1);
    }
  }

  /* Imprime los arreglos */
  /* console.log('Lista de nombres despues de eliminar: ' + listaNombres);
  console.log('Lista de ncontrol despues de eliminar: ' + listaNumeros);
  console.log('Lista de contador1 despues de eliminar: ' + listaContador);
  console.log('Lista de nombres asesores despues de eliminar: ' + listaNombresAsesores);
  console.log('Lista de rfc asesores despues de eliminar: ' + listaRfcAsesores);
  console.log('Lista de contador2 despues de eliminar: ' + listaContadorAsesores); */

  /* Guardar los arreglos en variables que sirvan para Php */
  let listaNombresAsesoresPhp = JSON.stringify(listaNombresAsesores);
  let listaRfcAsesoresPhp = JSON.stringify(listaRfcAsesores);
  let listaNombresExponentesPhp = JSON.stringify(listaNombres);
  let listaNumerosExponentesPhp = JSON.stringify(listaNumeros);
}

/* Funcionalidad de los selectbox */
const selected = document.querySelector(".selected")
const selected2 = document.querySelector(".selected2")

const optionsContainer = document.querySelector(".options-container")
const optionsContainer2 = document.querySelector(".options-container2")

const searchBox = document.querySelector(".search-box input")
const searchBox2 = document.querySelector(".search-box2 input")

const optionsList = document.querySelectorAll(".option")
const optionsList2 = document.querySelectorAll(".option2")

/* Primer selectbox */
selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");

  searchBox.value = "";
  filterList("");

  if (optionsContainer.classList.contains("active")) {
    searchBox.focus();
  }
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});

searchBox.addEventListener("keyup", function (e) {
  filterList(e.target.value);
});

const filterList = searchTerm => {
  searchTerm = searchTerm.toLowerCase();
  optionsList.forEach(option => {
    let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
    if (label.indexOf(searchTerm) != -1) {
      option.style.display = "block";
    } else {
      option.style.display = "none";
    }
  });
};

/* Segundo selectbox */
selected2.addEventListener("click", () => {
  optionsContainer2.classList.toggle("active");

  searchBox2.value = "";
  filterList("");

  if (optionsContainer2.classList.contains("active")) {
    searchBox2.focus();
  }
});

optionsList2.forEach(o => {
  o.addEventListener("click", () => {
    selected2.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer2.classList.remove("active");
  });
});

searchBox2.addEventListener("keyup", function (e) {
  filterList2(e.target.value);
});

const filterList2 = searchTerm => {
  searchTerm = searchTerm.toLowerCase();
  optionsList2.forEach(option => {
    let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
    if (label.indexOf(searchTerm) != -1) {
      option.style.display = "block";
    } else {
      option.style.display = "none";
    }
  });
};



/* Funcion archivos */
function Archivos() {
  fetch("../PhpConsultas/prueba.php", {
    method: "POST"
  }, true).then(response => response.json())
    .then(data => {
      nombre_completo = data.nombre_completo_Exponentes;
      numeros_control = data.no_control_Exponentes;
      nombre_completo_asesores = data.nombre_completo_docentes;
      rfc_asesores = data.rfc_docentes;
     
    });
}