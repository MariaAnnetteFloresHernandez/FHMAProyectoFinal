<?php
    require_once("autoload.php");
?> 

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="formularios.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css">
        <title>Nuevo registro</title>
    </head>
    <body>
        <?php
            if(isset($_POST["Inserta"])){
                ?>
                <div class="container">
                <form method="post">
                    <h1 class="title">Nuevo registro</h1>
                    <label class="input"for="nombre">Nombre</label>
                    <input class="input"type="text" name="nombre" id="nombre"><br>
                    <label class="input"for="edad">Edad</label>
                    <input class="input"type="text" name="edad" id="edad"><br>
                    <label class="input"for="Correo">Correo</label>
                    <input class="input"type="text" name="correo" id="correo"><br>
                    <input class ="btnGuardar"type="submit" name ="guardar" value="Guardar" id="inserto" onclick="notificar()">
                </form>
                </div>

                <script src="notificacion.js?v=<?php echo(rand()); ?>"></script>

                <?php
            }else if(isset($_POST["guardar"])){

                $nombre = $_POST["nombre"];
                $edad = $_POST["edad"];
                $correo = $_POST["correo"];

                $inserta = new Acciones();
                $resultado = $inserta->Insertar($nombre,$edad,$correo);
                if($resultado) header("location: http://localhost/proyectoFinal/principal.php");
                else echo "error al insertar";

            }else{
                header("location: http://localhost/proyectoFinal/principal.php");
            }
        ?>
    </body>
    </html>





