<!--
* Autor: Anderson Silva Brino
* Data: 14/05/2018
* Hora: 10:27:51
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $v = isset($_GET["val"])?$_GET["val"]:1;
        echo "<h1>Calculando o fatorial de $v</h1>";
        $c = $v;
        $fat = 1;
        do{
            $fat = $fat * $c;
            $c--;
        }while ($c >= 1);
        echo "<h2>$v! = $fat</h2>";
        ?><br>
        <a href="exercicio02Fatorial.html">Voltar</a>
    </body>
</html>


