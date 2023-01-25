<?php
    function con_parametros($var1, $var2, $var3){
        $suma = $var1 + $var2 + $var3;
        echo 'la suma de los 3 números es: ' .$suma . "<br/>";
    }

    function con_parametros_resta($var1, $var2){
        $resta = $var1 + $var2;
        echo 'la resta de los 2 números es: ' .$resta . "<br/>";
    }

    function con_parametros_multiplicacion($var1, $var2, $var3){
        $multiplicacion = $var1 * $var2 * $var3;
        echo 'la multiplicación de los 3 números es: ' .$multiplicacion . "<br/>";
    }

    function con_parametros_division($var1, $var2){
        $division = $var1 / $var2;
        echo 'la división de los 2 números es: ' .$division . "<br/>";
    }

    function con_parametros_modulo($var1, $var2){
        $modulo = $var1 % $var2;
        echo 'El módulo de los 2 números es: ' .$modulo . "<br/>";
    }

    function con_parametros_exponte($var1, $var2){
        $exponente = $var1 ** $var2;
        echo 'El resultado de la exponención de los 2 números es: ' .$exponente . "<br/>";
    }
?>

<html>
    <head>
    </head>
    <body>
        <?php
        con_parametros(2, 3, 4);
        con_parametros_resta(4, 2);
        con_parametros_multiplicacion(4, 2, 10);
        con_parametros_division(4, 4);
        con_parametros_modulo(10, 3);
        con_parametros_exponte(2,5)
        ?>
    </body>
</html>