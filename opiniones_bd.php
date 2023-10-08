<?php
        include("conexion.php");    

        $nombre_op  =   $_POST['nombre'];
        $correo_op  =   $_POST['correo_electronico'];
        $asunto     =   $_POST['asunto'];
        $mensaje    =   $_POST['mensaje'];

        $query = "INSERT INTO opiniones(nombre, correo_electronico, asunto, mensaje) 
                
                VALUES('$nombre_op','$correo_op','$asunto','$mensaje')";

        $ejecutar = mysqli_query($conexion, $query);
        if($ejecutar){
            echo'
                <script>
                       alert("Opinion enviada correctamente");
                        window.location = "index.php";
                </script>
                ';
        }else{
            echo'
            <script>
            alert("Intenetelo de nuevo");
            window.location = "opiniones_bd.php";
            </script>';
            exit;
        }

?>