document.addEventListener("DOMContentLoaded", function(){
    if(!Notification){
        alert("Las notificaciones no se soportan en tu navegador, bajate uno nuevo");
        return;
    }

    if(Notification.permission !== "granted"){
        Notification.requestPermission();
    }
});


    if(Notification.permission !== "granted"){
        Notification.requestPermission();
    }else{
        var notificacion = new Notification("No se pudo resetear el ID",
        {
            icon: "tap.png",
            body: "para hacer reset no debe haber registros en la base de datos"
        }
        );

        notificacion.onclick = function(){
           // window.open.replace("http://localhost/proyectoFinal/principal.php", "_self");
           location.replace("http://localhost/proyectoFinal/principal.php");
        }

    }
