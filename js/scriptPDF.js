document.addEventListener("DOMContentLoaded", () => { 
    //se escucha el click del boton 
    const $boton = document.querySelector("#CrearPdf");
    $boton.addEventListener("click", () => {
        const $elementoParaConvertir = document.body;
        html2pdf()
        .set({
            margin:1, 
            filename: 'documento.pdf', 
            html2canvas: {
                scale: 3, 
                letterRendering: true, 
            }, 
            jsPDF:{
                unit:"in",
                format: "a4", 
                orientation: 'portrait'
            }
        }) 
        .from($elementoParaConvertir)
        .save()
        .catch(err => console.log(err));
    });
});  