<!--
* @Autor: Anderson Silva Brino
* @Data: 21/05/2018
* @Hora: 11:02:56
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
            function teste(&$x){
                $x += 2;
                echo "<p>O valor de X e $x</p>";
            }
            $a = 3;
            teste($a);
            echo "<p>O valor de A e $a</p>";
            ?><br>    
        </div>
    </body>
</html>
