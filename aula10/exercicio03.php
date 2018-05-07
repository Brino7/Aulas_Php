<!--
* @ Autor: Anderson Silva Brino
* @ Data: 07/05/2018
* @ Hora: 07:38:45
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $est = isset($_GET["Estados"]) ? $_GET["Estados"] : 'SP';
        switch ($est) {
            case 'SP':
                echo "Região Sudeste";
                break;
            case 'AM':
                echo "Região Norte";
                break;
            case 'PR':
                echo "Região Sul";
                break;
            case 'GO':
                echo "Região Central";
                break;
            case 'CE':
                echo "Região Nordeste";
           
        }
        ?><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </body>
</html>


