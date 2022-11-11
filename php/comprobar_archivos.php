<?php
// ve si existe la template.docx para generar constancias
$template = false;
$constancia = false;
if(file_exists("../GeneradorConstancias/templates/template.docx")){
    $template = true;
}
if(file_exists("../GeneradorConstancias/constancias/ConstanciasAlumnos.docx") 
    && file_exists("../GeneradorConstancias/constancias/ConstanciasDocentes.docx")
    && file_exists("../GeneradorConstancias/constancias/ConstanciasExternos.docx")){

        $constancia = true;
}
$data = ["template"=>$template, "constancias"=>$constancia];
header("Content-Type: application/json");
echo json_encode($data);



?>