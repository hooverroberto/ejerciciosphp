<?php

$a= 3;
function recursividad($a)
{
    if ($a < 20) {
        echo "$a"."<br/>";
        recursividad($a + 1);
    }
}

recursividad($a);
?>
