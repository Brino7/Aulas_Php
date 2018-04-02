<!--
* @ Autor: Anderson Silva Brino
* @ Data: 02/04/2018
* @ Hora: 10:37:22
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            h2{
                font: 12pt Arial;
                color: #0033ff;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "<h2>Valores recebidos: $v1 e $v2</h2>";
            echo "O valor de $v1<sup>$v2</sup> e ". pow($v1, $v2);
            echo "<br>O valor absoluto de $v2 e ". abs($v2);
            echo "<br>A raiz de $v1 e ". sqrt($v1);
            echo "<br>O valor de $v2 arredondamento e ". round($v2);
            echo "<br>A parte inteira de $v2 e ". intval($v2);
        ?>
    </body>
</html>


