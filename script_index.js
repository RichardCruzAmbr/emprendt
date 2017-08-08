function leerAvisos() {
    $.get("php/leerAvisos.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}

$(document).ready(function () {
    // READ recods on page load
    leerAvisos(); // calling function
});


function leerMensajes(){
    $.get("php/leerMensajes.php", {}, function (data, status) {
        $(".mensajes_recibidos").html(data);
    });
}

$(document).ready(function () {
    // READ recods on page load
    leerMensajes(); // calling function
});

function eliminarmsg(id) {
    var conf = confirm("Estás seguro de querer eliminar el aviso?");
    if (conf == true) {
        
        $.post("php/eliminarAviso.php", {
                id: id
                
            },
            function (data, status) {
                // reload Users by using readRecords();
                leerAvisos();
            }
        );
    }
}


function eliminarAviso(id) {
    var conf = confirm("Estás seguro de querer eliminar el aviso?");
    if (conf == true) {
        
        $.post("php/eliminarAviso.php", {
                id: id
                
            },
            function (data, status) {
                // reload Users by using readRecords();
                leerAvisos();
            }
        );
    }
}

function agregarAviso() {
    // tomar valores
    var advice = $("#advice").val();
    var user = $("#user").val();
    // agregar datos
    $.post("php/agregarAviso.php", {
        advice: advice,
        user: user,
    }, function (data, status) {
        // cerrar modal
        $("#addAdvice").modal("hide");

        // leer datos nuevamente
        leerAvisos();

        // limpiar campos
        $("#advice").val("");
        $("#user").val("");
    });
}