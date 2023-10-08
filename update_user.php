<?php
include("conexion.php");

if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $query = "SELECT * FROM registros WHERE id = $user_id";
    $result = mysqli_query($conexion, $query);
    if(mysqli_num_rows($result) == 1){ 
        $row = mysqli_fetch_array($result);
        
        $user_name = $row['nombre'];
        $user_lastapat = $row['apat'];
        $user_lastamat = $row['amat'];
        $user_email = $row['correo'];
    }
}
// Cuando presionamos el botón actualizar / POST ENVIA DATOS
if(isset($_POST['update'])){
    $user_id = $_POST['id']; // Cambiamos $_GET por $_POST para obtener el ID del formulario
    $user_name = $_POST['nombre'];
    $user_lastapat = $_POST['apat'];
    $user_lastamat = $_POST['amat'];
    $user_email = $_POST['correo'];

    $query = "UPDATE registros SET nombre = '$user_name', apat = '$user_lastapat', amat = '$user_lastamat', correo = '$user_email' WHERE id = $user_id";
    mysqli_query($conexion, $query);

    $_SESSION['message'] = 'Usuario actualizado Satisfactoriamente';
    $_SESSION['message_type'] = 'warning';
    header("Location: usuarios.php ");
}
?>
<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
            <h4 style="text-align: center">ACTUALIZAR DATOS</h4>
            <br>
                <form action="update_user.php" method="POST"> <!-- Eliminamos ?id=<?php echo $_GET['id']?> ya que no es necesario en este punto -->
                    <h6>Nombre:</h6>
                    <input type="hidden" name="id" value="<?php echo $user_id ?>"> <!-- Agregamos un campo oculto para enviar el ID -->
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $user_name ?>" class="form-control" placeholder="Actualiza nombre">
                    </div>
                    <br>
                    <div class="form-group">
                    <h6>Apellido Paterno:</h6>
                        <input type="text" name="apat" value="<?php echo $user_lastapat ?>" class="form-control" placeholder="Actualiza apellido paterno">
                    </div>
                    <br>
                    <div class="form-group">
                        <h6>Apellido Paterno:</h6>
                        <input type="text" name="amat" value="<?php echo $user_lastamat ?>" class="form-control" placeholder="Actualiza apellido materno">
                    </div>
                    <br>
                    <div class="form-group">
                        <h6>Correo</h6>
                        <input type="text" name="correo" value="<?php echo $user_email ?>" class="form-control" placeholder="Actualiza correo">
                    </div>
                    <br>
                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
