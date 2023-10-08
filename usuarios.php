    <?php 
        include("conexion.php");
        include("includes/header.php");
    ?>

<div class="container p-3">
    <div class="row ">

        <!--Contenedor para registrar datos -->
        <div class="col-4">
            <div class="p-3 border rounded bg-dark">
                <form action="register_cod.php" method="POST" class="formulario_register" >
                    <h3 style="color: white">Registro</h3>
                    <br>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Apellido Paterno" name="apat">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Apellido Materno" name="amat">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo" name="correo">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Contraseña" name="user_password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">REGISTRAR</button>
                    </div>
                </form>
            </div>

            <!--Botones para pdd-->
<br>
            <div class="row">
            <h3 >Descargar</h3>
<br>
                <div class="col-6">

                <form action="pdf_op.php" method="post">
                   <button type="submit" class="btn btn-dark">Opiniones</button>
                </form>
                </div> 


                <div class="col-6">
                <form action="pdf_registro.php" method="post">
                    <button type="submit" class="btn btn-dark">Registros</button>
                 </form>
                </div> 
            </div>
            
            <!---->
                    

        </div>

        <!--Tabla donde se obtiene los datos   -->

        <div class=" col-8">
            <div class="p-3 border rounded bg-dark">
            <h3 style="color: white">Registros</h3>
                <table class="table table-bordered mx-auto" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th>
                        <th></th>
                    </thead>

                        <!--Consulta
                        $result_tasks : es una variable que se utiliza para almacenar los 
                        resultados de una consulta a una base de datos, lo que 
                        te permite acceder y manipular los datos de la consulta en tu código PHP. 
                
                        mysqli_fetch_array() es una función en PHP que se utiliza para obtener una fila
                        de resultados de una consulta a una base de datos MySQL -->

                    <tbody>
                        <?php
                            $query = "SELECT * FROM registros";
                            $result_tasks = mysqli_query($conexion, $query);

                            $contador = 1;
                            while($row = mysqli_fetch_array($result_tasks)){ ?>
                                <tr>
                                    <td>
                                        <?php echo $contador ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nombre'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['apat']?>
                                    </td>
                                    <td>
                                        <?php echo $row['amat']?>
                                    </td>
                                    <td>
                                        <?php echo $row['correo']?>
                                    </td>
                                    <td>
                                        <a href="update_user.php?id=<?php echo $row['id']?>" class="btn btn-info">
                                        <i class="fas fa-marker"></i>
                                        </a>
                                        <a href="delete_user.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </tr>
                                    </td>
                                <?php $contador++;
                            }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

