<!--
* @Autor: Anderson Silva Brino
* @Data: 21/05/2018
* @Hora: 08:30:38
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php
            $n = isset($_GET["num"]) ? $_GET["num"] : 1;
            for ($c = 1; $c <= 10; $c++) {
                $r = $n * $c;
                echo "$n X $c = $r<br>";
            }
            ?><br>
            <a href="javascript:history.go(-1)">Voltar</a>
        </div>
    </body>
</html>
