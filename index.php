<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="formulario" method="POST" action="llena.php">
            <table border="1">
                <thead>
                    <tr>
                        <th>INFORMACIÓN PELÍCULAS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td><input type="text" name="idpelicula" value="" size="20"/></td>
                    </tr>
                    <tr>
                        <td>NOMBRE</td>
                        <td><input type="text" name="nombre" value=""size="20"/></td>
                    </tr>
                    <tr>
                        <td>DESCRIPCIÓN</td>
                        <td><input type="text" name="descripcion" value=""size="20"/></td>
                    </tr>
                    <tr>
                        <td>GENERO</td>
                        <td><input type="text" name="genero" value=""size="20"/></td>
                    </tr>
                    <tr>
                        <td>DURACION</td>
                        <td><input type="text" name="duracion" value=""size="20"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Guardar" name="guardar"/></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
    </body>
</html>
