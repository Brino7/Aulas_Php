<!--
* @ Autor: Anderson Silva Brino
* @ Data: 09/04/2018
* @ Hora: 09:23:55
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo "Os valores passados são $n1 e $n2 <br>";
            echo "O resultado e ".(($tipo == "s")?$n1+$n2:$n1*$n2);
        ?>
    </body>
</html>


