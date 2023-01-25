<?php
 include ('config/db.php');

$id = $_GET['id'];
$query = mysqli_query($conexion,"DELETE FROM productos where (id = '$id')");

if($query){
    header('location:index.php');
}

?>