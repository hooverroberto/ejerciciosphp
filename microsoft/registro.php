<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    
<?php include 'navbar.php' ?>

<div class="container">
    <?php
    echo '<h1>Registro de productos Microsoft</h1>';
    '<h2> Productos </h2>';
    ?>

    <form action="guardar.php" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group mx-sm3 mb-3">
                <label></label>
                <input type="text" required class="form-control" name="name" placeholder="Nombre">
            </div>
        </div>
        <div class="form-group">
            <label></label>
            <input type="file" required class="form-control" name="imagen">
        </div>


        <input class="btn btn-primary" value="Aceptar" type="submit" />
    </form>
</div>
</body>
</html>