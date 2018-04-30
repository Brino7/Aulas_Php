<!--
* @ Autor: Anderson Silva Brino
* @ Data: 30/04/2018
* @ Hora: 09:06:35
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos.<br>";
        if ($i < 16) {
            $tipovoto = "nâo vota";
        } elseif (($i >= 16 && $i < 18)||($i > 65)) {
            $tipovoto = "voto opcional";
        } else {
            $tipovoto = "voto obrigatório";
        }
        echo "Para essa idade, $tipovoto.<br>";
        ?>
        <a href="exercicio02.html">Voltar</a>
    </body>
</html>


