<!--
* Autor: Anderson Silva Brino
* Data: 14/05/2018
* Hora: 10:40:21
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculo Tabuada</title>
    </head>
    <body>
        <?php
        $n = isset($_GET["nT"]) ? $_GET["nT"] : 1;
        echo "A tabuada de $n é: <br>";
        $c = 1;
        do {    
            $r = $n * $c;
            echo "$n X $c = $r <br>";
            $c++;
        } while ($c <= 10);
        ?>
        <a href="tabuada.html">Voltar</a>
    </body>
</html>


