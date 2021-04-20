$(document).ready(function () {

    $.ajax({
        url: 'Modulo_php/catalog_q.php',
        mathod: 'post',

    })
        .done(function (result) {
            $('#catalog').html(result)
        })
        .fail(function (result) {
            console.log('fail');
        })
})