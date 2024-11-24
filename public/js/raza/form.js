$(function () {
    bsCustomFileInput.init();
});

// CKEDITOR
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

$('.ckeditor').each(function () {
    ClassicEditor
        .create(this)
        .catch(error => {
            console.log(error);
        });
});

// Base64 Image Preview
$('.img-product').on('change', function(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        var element = $(this).closest('.secc2-int, .secc1-int').find('figure img');
        element.attr('src', event.target.result);
        element.removeClass('d-none');
    }
    reader.readAsDataURL(file);
});
