<?php
    $cons_usuario="root";
    $cons_passw="";
    $cons_base_datos="customjrz";
    $cons_equipo="localhost:3308";
    $cone=mysqli_connect($cons_equipo,$cons_usuario,$cons_passw,$cons_base_datos);
    
    if($cone)
    {
        header('Location: index.html');;
    }
    else
    {
        echo "Error en la conexión";
    }
?>