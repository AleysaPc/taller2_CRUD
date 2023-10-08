<?php include("includes/header.php");?>


<div class="container">    
    <div class="row" style="padding: 60px">
        <div style="background-color: whitesmoke;  border-radius: 10px; padding: 20px;">
            <form style=" padding: 40px; color:dark " action="opiniones_bd.php" method="post">
            
            <h2 style="color: black">Contacto</h2>
                <br>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Tu nombre (Obligatorio)</label>
                    <input type="text" class="form-control" id="nombre" name=nombre>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Tu correo electrónico (Obligatorio)</label>
                    <input type="email" class="form-control" id="email" name=correo_electronico>
                </div>

                <div class="mb-3">
                    <label for="asunto" class="form-label">Asunto (Obligatorio)</label>
                    <input type="text" class="form-control" id="asunto" name=asunto>
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label">Tu mensaje (Obligatorio)</label>
                    <textarea class="form-control" id="mensaje" required style="height: 150px;" name = mensaje></textarea>
                </div>

                <div class="mb-3">
                    
                    <div style="width: 25%; border: 2px solid #ccc; padding: 15px;">
                        <input type="checkbox" class="form-check-input" id="recaptcha" required>
                        <label class="form-check-label" for="recaptcha">
                            No soy un robot
                            <img src="img/Recaptcha.png" alt="Imagen de robot" width="50">
                        </label>
                    </div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Enviar</button>            
            </form>
        </div>
    </div>
</div>
<?php include("includes/footer.php");?>
