<?php
    include('conexion.php');
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $mensaje=$_POST['mensaje'];

    $sql = "INSERT INTO contactos(Nombre,Email,Mensaje) VALUES('$nombre','$email','$mensaje')";
    $result = mysqli_query($cone,$sql);

?>