<!--/*
* @ Autor: Anderson Silva Brino
* @ Data: 02/04/2018
* @ Hora: 09:21:46
*/-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operadores Aritméticos</title>
    </head>
    <body>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<h2>Valores recebidos $n1 e $n2</h2>";
            $m = ($n1+$n2)/2;
            echo "A soma entre $n1 e $n2 e igual a ".($n1+$n2);
            echo "<br>A subtracao vale ". ($n1-$n2);
            echo "<br>A multiplicacao vale ". ($n1*$n2);
            echo "<br>A divisao vale ". ($n1/$n2);
            echo "<br>O modulo vale ". ($n1%$n2);
            echo "<br>A media vale $m";
        ?>
    </body>
</html>


