<?php

session_start();

include ("conexion.php");

$user_email = $_POST['correo'];
$user_pass = $_POST['user_password'];

$user_password = hash('sha512', $user_pass);

$validar_login = mysqli_query($conexion, "SELECT * FROM registros WHERE correo ='$user_email' and user_password='$user_pass'");

if (mysqli_num_rows($validar_login) > 0) {
    //$_SESSION['correo'] = $user_email;
    //  header("location: usuarios.php");
    echo '
    <script>
        alert("Bienvenido a Sky Bolivia..! Te estabamos Esperando...!");
        window.location ="index.php";
    </script>
    ';
  exit;
} else {
    echo '
    <script>
        alert("usuario no existe, porfavor verifique los datos introducidos");
        window.location ="index.php";
    </script>
    ';
    exit;
}
