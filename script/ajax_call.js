//load pag
$(document).ready(function () {
    $.ajax({
        url: 'Modulo_php/catalog_q.php',
        dataType: 'json',
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

// clik om az
// clik om asc
// clik om des