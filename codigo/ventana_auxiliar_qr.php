<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventana auxiliar de codigo qr</title>
    <link rel="stylesheet" href="/css/ventana_auxiliar_qr.css">
</head>
<body>
    <div class="titulo_pagina">
        <h1>Toma captura de  tu código QR por favor</h1>
    </div>
    <div class="Contenedor_qr">
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
    </div>
</body>
</html>