<?php 
    $conexion = mysqli_connect("localhost","root","","datos_etapa1");

    if($conexion){
        echo "Conexion Exitosa";
    }else{
        echo "Conexion Fallida";
    }
?>