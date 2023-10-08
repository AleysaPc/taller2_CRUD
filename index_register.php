<?php include("includes/header.php")?>

<!--Contenedor Principal -->

<div class="container overflow-hidden">
    <div class="row mt-5 gx-5 align-items-center">
     <!--Contenedor que divide en 6 de 12-->

        <div class="col-6">
             <div class="p-3 border border rounded bg-dark">
                <!--Conexion a userio.php-->
                <form action="login_usuario.php" method="POST" class="fomulario__register">
                    <div class="mb-3">
                        <h2 class="text-light">Iniciar Sesión</h2>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" name="correo">
                    </div>
                    
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="user_password">
                    </div>
                    <button type="submit" class="btn btn-primary border">Entrar</button>
                </form>
            </div>
        </div>

        <!--Segundo Contenedor para registro-->
        <div class="col-6">
            <div class="p-3 border border rounded bg-dark">
                <h2 class="text-light">REGISTRO</h2> <!--Text-light color de letra-->
                <!--Conexion-->
                    <form action="register_cod.php" method="POST" class="fomulario__register">
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
                            <input type="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Correo" name="correo">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Contraseña" name="user_password">
                        </div>
                        <div class="mb-3" value="usuario">
                            <button type="submit" class="btn btn-primary border"> REGISTRARSE</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>


