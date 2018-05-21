<!--
* @Autor: Anderson Silva Brino
* @Data: 21/05/2018
* @Hora: 08:13:43
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 02</title>
    </head>
    <body>
        <div>
            <form method="get" action="02-tabuada.php">
                <select name="num">
                    <option>Selecione</option>
                    <?php
                    for($c = 1; $c >= 10; $c++){
                        echo "<option>$c</option>";
                    }
                    ?>
                </select>
                <input type="submit" value="Tabuada"/>
            </form>
        </div>
    </body>
</html>
