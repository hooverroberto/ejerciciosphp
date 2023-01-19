<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-5 mb-5">Registor de alumnos</h1>
        <form method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre</label>
                    <input type="email" class="form-control" id="inputEmail4" name="nombre" placeholder="Nombre">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Apellido</label>
                    <input type="password" class="form-control" id="inputPassword4" name="apellido" placeholder="Apellido">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Carnet</label>
                <input type="text" class="form-control" id="inputAddress" name="carnet" placeholder="Carnet">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Nacimiento</label>
                <input type="text" class="form-control" id="inputAddress2" name="nacimiento" placeholder="Nacimiento">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Teléfono</label>
                    <input type="text" class="form-control" id="inputCity" name="telefono" placeholder="Teléfono">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Dirección</label>
                    <input type="text" class="form-control" id="inputCity" name="direccion" placeholder="Dirección">
                </div>
            </div>

            <input class="btn btn-primary" value="Enviar Datos" name="enviar" type="submit" />
        </form>
    </div>

    <?php

    $base_datos = mysqli_connect("localhost","root","","colegio");
    if($base_datos){
        echo '<div class="alert alert-info text-center mt-5" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="green" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
        <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
        <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
      </svg> Conexion Correcta
      </div>';    

    }

    if(isset($_POST['enviar'])){
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $carnet=$_POST["carnet"];
        $nacimiento=$_POST["nacimiento"];
        $direccion=$_POST["direccion"];
        $telefono=$_POST["telefono"];
    }

    ?>
</body>

</html>