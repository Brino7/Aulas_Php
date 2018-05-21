<!--
* @Autor: Anderson Silva Brino
* @Data: 21/05/2018
* @Hora: 10:30:20
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
                return $s;
            }
            
            $x = 3;
            $y = 4;
            $r = soma($x, $y);
            echo "A soma entre $x e $y e igual a $r.";
            ?><br>    
        </div>
    </body>
</html>
