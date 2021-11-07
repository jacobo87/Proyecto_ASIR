function init() {
    $("#caso_form").on("submit", function (e) {
        guardareditar(e);
    });
}

/* Iniciamos el componente de summernote */
$(document).ready(function () {
    /* Añadimos el id para identificarlo */
    $('#descripcion_caso').summernote({
        height: 200
    });
    /* Hacemos una llamada al combo de categoria */
    $.post("../../controller/categoria.php?op=combo", function(data, status){
        $('#categoria').html(data);
    });
});

function guardareditar(e) {
    // añadimos está función para que no salte varias veces
    e.preventDefault();
    // Declaranos la variable formData
    var formData = new FormData($("caso_form")[0]);
    $.ajax({
        url: "../../controller/caso.php?op=insertar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
            console.log(datos);
        }
    });
}

init();