<?php 

function mostrarTexto($texto) {

echo "<strong>El texto a mostrar es el siguiente: </strong>";

echo $texto;

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>
    <?php
    mostrarTexto("Me gusta mucho la web de aprenderaprogramar.com");
    ?>
</body>

</html>