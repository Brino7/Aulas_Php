<!--
* @ Autor: Anderson Silva Brino
* @ Data: 16/04/2018
* @ Hora: 10:24:12
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz quadrada de $valor e a ". number_format($rq,2).".";
        ?>
        <a href="01exercicio.html">Voltar</a>
    </body>
</html>


