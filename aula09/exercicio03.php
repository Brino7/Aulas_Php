<!--
* @ Autor: Anderson Silva Brino
* @ Data: 30/04/2018
* @ Hora: 09:39:03
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $n1 = isset($_GET["nota01"]) ? $_GET["nota01"] : 0;
        $n2 = isset($_GET["nota02"]) ? $_GET["nota02"] : 0;
        if (($n1 == 0) && ($n2 == 0)) {
            echo "As notas precisam ser digitadas.";
        } else {
            $media = ($n1 + $n2) / 2;
            if ($media < 5) {
                echo "A média entre $n1 e $n2 é $media e por isto o aluno está reprovado.";
            } elseif (($media >= 5) && ($media < 7)) {
                echo "A média entre $n1 e $n2 é $media e por isto o aluno está em recuperação.";
            } else {
                echo "A média entre $n1 e $n2 é $media e por isto o aluno está aprovado";
            }
        }
        ?>
        <br>
        <a href="exercicio03.html">Voltar</a>
    </body>
</html>


