<!--
* @Autor: Anderson Silva Brino
* @Data: 21/05/2018
* @Hora: 10:40:36
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
            function soma(){
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for($i = 0; $i < $t; $i++){
                    $s += $p[$i];
                }
                return $s;
            }
            $r = soma(3,5,2);
            echo "A soma dos valores e $r";
            ?><br>
        </div>
    </body>
</html>
