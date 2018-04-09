<!--
* @ Autor: Anderson Silva Brino
* @ Data: 09/04/2018
* @ Hora: 10:01:56
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $ano = $_GET["an"];
            $idade = 2018 - $ano;
            echo "Quem nasceu em $ano tem $idade anos.<br>";
            $voto = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NAO OBRIGATÓRIO";
            echo "E dessa forma seu voto é $voto.";
        ?>
    </body>
</html>


