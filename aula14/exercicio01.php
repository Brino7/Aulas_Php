<!--
* @Autor: Anderson Silva Brino
* @Data: 21/05/2018
* @Hora: 10:21:28
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php
            function soma($a, $b){
                $s = $a + $b;
                echo "<p>A soma vale $s</p>";
            }
            soma(3, 4);
            soma(8, 2);
            $x = 9;
            $y = 15;
            soma($x, $y);
            ?><br>
        </div>        
    </body>
</html>
