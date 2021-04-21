//load pag
$(document).ready(function () {
    //console.log($('#ccat').val());
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





$('#ccat').change(function (e) {
    e.preventDefault();
    $.ajax({
        url: 'Modulo_php/catalog_q.php',
        dataType: 'json',
        type: 'post',
        data: $("form").serialize()


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




