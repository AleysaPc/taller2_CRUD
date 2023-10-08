<?php include("conexion.php");

    if(isset($_GET['id'])){
        
    $user_id = $_GET['id'];
    $query = "DELETE FROM registros WHERE id = $user_id";
    $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query Fallida");
        }

        $_SESSION['mensaje'] = "Registro Eliminado correctamente";
        $_SESSION['mensaje_type'] = "danger";
        header("location: usuarios.php");
    }
?>
