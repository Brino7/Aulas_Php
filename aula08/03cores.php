<!--
* @ Autor: Anderson Silva Brino
* @ Data: 16/04/2018
* @ Hora: 11:35:12
-->
<!DOCTYPE html>
<html>
    <head>
        <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Generico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "000000";
        ?>
        <meta charset="UTF-8">
        <title>03 Cores</title>
        <style>
            span.texto{
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
            echo "<span class='texto'>$txt</span>"
            ?>
            <br>
            <a href="03exercicio.html">Voltar</a>
        </div>
    </body>
</html>


