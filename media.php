<!--
* @ Autor: Anderson Silva Brino
* @ Data: 09/04/2018
* @ Hora: 09:46:51
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $media = ($nota1+$nota2)/2;
            echo "O valor da media entre $nota1 e $nota2 e $media<br>";
            echo "A situação do aluno e ".(($media>=6)?"APROVADO":"REPROVADO");
        ?>
    </body>
</html>


