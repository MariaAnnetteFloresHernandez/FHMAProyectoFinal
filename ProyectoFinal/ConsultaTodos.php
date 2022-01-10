<?php
    require_once("autoload.php");
    $consulta = new Acciones();
    $resultado = $consulta->ConsultaTodos();
    print_r("<pre>");
    print_r($resultado);
    print_r("</pre>");
?>