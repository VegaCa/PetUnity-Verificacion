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
