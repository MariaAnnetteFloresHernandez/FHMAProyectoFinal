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
        <title>Editar registro</title>
    </head>
    <body>
        <?php
            if(isset($_POST["Actualiza"])){
                $idb = $_POST["id"];
                $actualiza = new Acciones();
                $resultado = $actualiza->ConsultaId($idb);
                ?>
                <div class="container">
                <form method="post">
                    <h1 class="title">Editar registro</h1>
                    <input type="hidden" name="id" value="<?php echo $resultado[0]["id"] ?>">
                    <label>Id</label>
                    <input type="text" value="<?php echo $resultado[0]["id"] ?>" disabled><br>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $resultado[0]["nombre"] ?>"><br>
                    <label for="edad">Edad</label>
                    <input type="text" name="edad" id="edad" value="<?php echo $resultado[0]["edad"] ?>"><br>
                    <label for="Correo">Correo</label>
                    <input type="text" name="correo" id="correo" value="<?php echo $resultado[0]["correo"] ?>"><br>
                    <input class="btnGuardar"type="submit" name ="guardar" value="Guardar" id="actualizo" onclick="notificar()">
                </form>
                </div>

                <script src="notificacion.js?v=<?php echo(rand()); ?>"></script>

                <?php
            }else if(isset($_POST["guardar"])){
                $id = $_POST["id"];
                $nombre = $_POST["nombre"];
                $edad = $_POST["edad"];
                $correo = $_POST["correo"];
               
                $actualiza = new Acciones();
                $resultado = $actualiza->Actualizar($id,$nombre,$edad,$correo);
                
                if($resultado>0) header("location: http://localhost/proyectoFinal/principal.php");
                else echo "error al actualizar";

            }else{
                header("location: http://localhost/proyectoFinal/principal.php");
            }
        ?>
    </body>
    </html>





<?php
    require_once("autoload.php");
    $actualiza = new Acciones();
    //$resultado = $actualiza->Actualizar(2,"PruebaActualiza", 22, "prueba2@.com");
    //if($resultado>0) echo "Se actualizo correctamente el registro";
    //else echo "error al actualizar";
?>
