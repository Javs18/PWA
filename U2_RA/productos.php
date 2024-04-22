<?php
    include('conexion.php');
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $talla=$_POST['talla'];

    $sql = "INSERT INTO productos(Nombre, Tallas, Precio) VALUES('$nombre','$talla','$precio')";
    $result = mysqli_query($cone,$sql);
?>