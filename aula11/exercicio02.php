<!--
* @ Autor: Anderson Silva Brino
* @ Data: 07/05/2018
* @ Hora: 10:05:09
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $i = 1;
        while ($i <= 5){
            $v = "num".$i;
            $url = "v".$i;
            $$v = isset($_GET[$url])?$_GET[$url]:0;
            $i++;
        }
        $i = 1;
        while ($i <= 5){
            $v = "num".$i;
            echo "Valor $i: ".$$v."<br>";
            $i++;
        }
        ?><br>
        <a href="exercicio02.html">Voltar</a>
    </body>
</html>


