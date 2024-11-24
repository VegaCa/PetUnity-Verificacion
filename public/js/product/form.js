$(function () {
    bsCustomFileInput.init();
});
//CK EDITOR
ClassicEditor
    .create(document.querySelector('#descripcion'), {
    })
    .catch(error => {
        console.log(error);
    });
ClassicEditor
    .create(document.querySelector('#descripcion_en'), {
    })
    .catch(error => {
        console.log(error);
    });

//BASE64 IMG
$('.img-product').on('change', function(event){
    console.log('img change');
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        var element = $(this).parent('.custom-file').siblings('figure').find('img');
        element.attr('src', event.target.result);
        element.removeClass('d-none');
    }
    reader.readAsDataURL(file);

});

$('#delete-imagen2').on('click', function() {
    $('#imagen2_eliminar').val('1');
    // Elimina la imagen cargada
    $('#imagen2').val('');
    // Restablece el texto del campo de entrada del archivo
    $('#label-imagen2').text('Imagen 2');
    // Muestra la imagen predeterminada
    $('#preview-imagen2').attr('src', defaultImage);
    $('#preview-imagen2').removeClass('d-none');
});
//////////////////////////////
$('#delete-imagen3').on('click', function() {
    $('#imagen3_eliminar').val('1');
    $('#imagen3').val('');
    $('#label-imagen3').text('Imagen 3');
    $('#preview-imagen3').attr('src', defaultImage);
    $('#preview-imagen3').removeClass('d-none');
});
//////////////////////////////
$('#delete-imagen4').on('click', function() {
    $('#imagen4_eliminar').val('1');
    $('#imagen4').val('');
    $('#label-imagen4').text('Imagen 4');
    $('#preview-imagen4').attr('src', defaultImage);
    $('#preview-imagen4').removeClass('d-none');
});
//////////////////////////////
$('#delete-imagen5').on('click', function() {
    $('#imagen5_eliminar').val('1');
    $('#imagen5').val('');
    $('#label-imagen5').text('Imagen 5');
    $('#preview-imagen5').attr('src', defaultImage);
    $('#preview-imagen5').removeClass('d-none');
});


//CATEGORY AND SUBCATEGORY SELECTORS
$(document).ready(function() {
    var categoria = $('#categoria');
    var subcategorias = $('#subcategoria option');

    // Función para filtrar las subcategorías basándose en la categoría seleccionada
    function filtrarSubcategorias() {
        var categoriaId = categoria.val();
        $('#subcategoria').val(''); // selecciona la opción vacía
        subcategorias.each(function() {
            var subcategoria = $(this);
            if (subcategoria.data('categoria') == categoriaId) {
                subcategoria.show();
            } else {
                subcategoria.hide();
            }
        });
    }

    // Escucha el evento de cambio en el selector de categorías
    categoria.change(filtrarSubcategorias);

    // Filtra las subcategorías cuando la página se carga por primera vez
    filtrarSubcategorias();
});
