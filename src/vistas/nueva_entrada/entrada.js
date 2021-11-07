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

