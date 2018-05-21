<!--
* @Autor: Anderson Silva Brino
* @Data: 21/05/2018
* @Hora: 07:58:26
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 01</title>
    </head>
    <body>
        <div>
            <?php
            for($i = 1; $i <=10; $i++){
                echo "$i ";
            }
            echo "<br>";
            for($i = 10; $i>= 1; $i--){
                echo "$i ";
            }
            echo "<br>";
            for($i = 0; $i <= 100; $i += 5){
                echo "$i ";
            }
            echo "<br>";
            for($i = 20; $i >= 0; $i-=2){
                echo "$i ";
            }
            ?><br>
            <a href="">Voltar</a>
        </div>
    </body>
</html>
