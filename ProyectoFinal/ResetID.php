<?php 
    require_once("autoload.php");
   $consulta = new Acciones();
   $resultado = $consulta->Reset();
   if($resultado == 0){
        $resetear = $consulta->Resetea();
        header("location: http://localhost/proyectoFinal/principal.php");
   }else{
       print '<script src="reset.js"></script>';
   }

?>