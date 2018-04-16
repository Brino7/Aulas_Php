<!--
* @ Autor: Anderson Silva Brino
* @ Data: 16/04/2018
* @ Hora: 10:52:41
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"Nome não informado";
        $ano = isset($_GET["ano"])?$_GET["ano"]: date("Y");
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Sexo não selecionado";
        $idade = date("Y") - $ano;
        echo "$nome e $sexo e tem $idade anos.";
        ?>
        <a href="02exercicio.html">Voltar</a>
    </body>
</html>


