<?php
include("conexion.php");

    /*Creamos Variables*/
    $user_name = $_POST['nombre'];
    $user_lastname = $_POST['apat'];
    $user_lastnameSecund = $_POST['amat'];
    $user_email = $_POST['correo'];
    $user_pass = $_POST['user_password'];

    /*Consulta*/
    $query = "INSERT INTO registros (nombre, apat, amat, correo, user_password) 
    VALUES('$user_name','$user_lastname','$user_lastnameSecund','$user_email','$user_pass')";

    /* codigo que verifica la duplicidad de registros
    
    
    */

    $ejecutar = mysqli_query($conexion, $query);
    //
    if($ejecutar){
        echo'
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "usuarios.php";
            </script>
        ';
        exit;
    }else{
        echo'
        <script>
            alert("Error, Intentelo de Nuevo");
            window.location = "index_register.php";
        </script>
        ';
        exit;
    }
?>
