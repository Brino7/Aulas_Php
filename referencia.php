<!--
* @ Autor: Anderson Silva Brino
* @ Data: 02/04/2018
* @ Hora: 11:56:49
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - by Gustavo Guanabara</title>
    </head>
    <body>
        <?php
            $a = 3;
            $b = &$a;
            $b += 5;
            echo "A varialvel A vale $a";
            echo "<br>A variavel B vale $b";
        ?>
    </body>
</html>


