//load pag
$(document).ready(function () {
    $.ajax({
        url: 'Modulo_php/catalog_q.php',
        dataType: 'json',
        data: cat = $('#ccat').val(),

    })
        .done(function (result) {
            // console.log('sussece' + result);
            $.each(result, function (key, JsonCat) {
                console.log(JsonCat);
                $('#descri').append("<img src=" + JsonCat.post_products + " >")
                $('#descri').append("<p> " + JsonCat.name_products + "</p>")
                $('#descri').append("<p> " + JsonCat.relese_date_products + "</p>")
                $('#descri').append("<p> " + JsonCat.discription_products + "</p>")
                $('#descri').append("<p> " + JsonCat.price_products + "</p>")
                $('#descri').append("<p> " + JsonCat.name_categories + "</p>")

            })
        })
        .fail(function (result) {
            console.log('Ajax fail' + result);
        })

})


$('#az').click(function () {



})

$('#asc').click(function () {
    console.log('asc');

})

$('#des').click(function () {
    console.log('des');

})

