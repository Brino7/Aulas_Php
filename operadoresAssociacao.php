<!--
* @ Autor: Anderson Silva Brino
* @ Data: 02/04/2018
* @ Hora: 11:21:18
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - by Gustavo Guanabara</title>
    </head>
    <body>
        <?php
            $preco = $_GET["p"];
            echo "O preço do produto e R$ ". number_format($preco,2,",",".");
            $preco = $preco + ($preco*10/100);
            echo "<br>E o novo preço com 10% de aumento e R$ ". number_format($preco,2,",",".");
        ?>
    </body>
</html>


