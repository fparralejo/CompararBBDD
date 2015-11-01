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
        <form action="./listado.php" method="post">

            <label>Servidor:</label>
            <input type="text" name="servidor" value="" />
            <label>Usuario:</label>
            <input type="text" name="usuario" value="" />
            <label>Clave:</label>
            <input type="text" name="pass" value="" />
            <label>Nombre BBDD:</label>
            <input type="text" name="base_datos" value="" />
            
            <input type="submit" name="OK" value="Leer" />
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
