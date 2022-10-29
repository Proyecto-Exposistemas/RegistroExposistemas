<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generación codigo qr</title>
    <link rel="stylesheet" href="/css/estilo_pagina_qr.css">
</head>
<body>
  <div class="contenedor_titulo" >  
  <h1>POR FAVOR DESCARGA TU CODIGO QR</h1>
  </div>
  <?php
   
     require 'phpqrcode/qrlib.php';

     $dir='temp/';
     $identificador=$_GET['identificador'];
    
    if(!file_exists($dir))
            mkdir($dir);

        $filename= $dir.'test.png';
        
        $tamanio=10;
        $level='M';
        $frameSize=3;
        $contenido=$identificador;
    
     QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);
     echo "POR FAVOR DESCARGA TU CODIGO QR";
     echo '<img src="'.$filename.'" />';

    ?>
 
</body>
</html>


