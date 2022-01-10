<?php
    require_once("autoload.php");
    $consultaId = new Acciones();
    $resultado = $consultaId->ConsultaId(1);
    print_r("<pre>");
    print_r($resultado);
    print_r("</pre>");
?>