<!--
* @ Autor: Anderson Silva Brino
* @ Data: 23/04/2018
* @ Hora: 07:21:35
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
        echo "Voce nasceu em $a e terá $i anos.<br>";
        if ($i >= 18) {
            $v = "ja pode votar";
            $d = "ja pode dirigir";
        } else {
            $v = "nao pode votar";
            $d = "nao pode dirigir";
        }
        echo "Com essa idade você $v e também $d.<br>";
        ?>
        <a href="exercicio01.html">Voltar</a>
    </body>
</html>
