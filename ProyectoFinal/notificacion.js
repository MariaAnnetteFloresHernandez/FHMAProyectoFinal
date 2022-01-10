document.addEventListener("DOMContentLoaded", function(){
    if(!Notification){
        alert("Las notificaciones no se soportan en tu navegador, bajate uno nuevo");
        return;
    }

    if(Notification.permission !== "granted"){
        Notification.requestPermission();
    }
});

function notificar(){
    if(Notification.permission !== "granted"){
        Notification.requestPermission();
    }else{
        var test = document.querySelector('.btnGuardar');
        var notificacion = new Notification("Se realizo la operación correctamente",
        {
            icon: "check.png",
            body: "se " + test.id + " en la base de datos"
        }
        );

    }
}

