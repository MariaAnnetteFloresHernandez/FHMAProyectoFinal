<?php
    require_once("autoload.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="principal.css?v=<?php echo(rand()); ?>"/>
    <title>Document</title>
</head>
<body>
    <div>
    <table class="tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Correo</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $consulta = new Acciones();
                $resultado = $consulta->ConsultaTodos();
                foreach($resultado as $campo=>$valor){
                    echo "<tr>";
                    echo "<td>" . $valor["id"] . "</td>";
                    echo "<td>" . $valor["nombre"] . "</td>";
                    echo "<td>" . $valor["edad"] . "</td>";
                    echo "<td>" . $valor["correo"] . "</td>";
                    echo "
                    <td><form action='Actualizar.php' method='post'>
                        <input type='hidden' name='id' value='" . $valor["id"] . "'>
                        <input type='submit' name='Actualiza' value='Editar'>
                    </form></td>";
                    echo "
                    <td><form action='Eliminar.php' method='post'>
                        <input type='hidden' name='id' value='" . $valor["id"] . "'>
                        <input type='submit' name='Elimina' value='Eliminar'>
                    </form></td>";
                    echo "</tr>";
                }
            ?>
            <tr><td colspan=4><form action='Insertar.php' method='post'><input type='submit' name='Inserta' value='Registro nuevo'></form></td>
                <td colspan=2><form action='ResetID.php' method='post'><input type='submit' name='Reset' value='Resetear ID'></form></td>
        </tr>
        </tbody>
    </table>
    </div>
    
</body>
</html>
