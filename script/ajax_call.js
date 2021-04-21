
function done(result) {
    $('#descri').html('');
    $.each(result, function (key, JsonCat) {
        console.log(JsonCat);
        $('#descri').append("<img src=" + JsonCat.post_products + " >")
        $('#descri').append("<p> " + JsonCat.name_products + "</p>")
        $('#descri').append("<p> " + JsonCat.relese_date_products + "</p>")
        $('#descri').append("<p> " + JsonCat.discription_products + "</p>")
        $('#descri').append("<p> " + JsonCat.price_products + "</p>")
        $('#descri').append("<p> " + JsonCat.name_categories + "</p>")

    })
}
function fail() {

}

//load pag
$(document).ready(function () {
    //console.log($('#ccat').val());
    $.ajax({
        url: 'Modulo_php/catalog_q.php',
        dataType: 'json',

    })


        .done(function (result) {
            done(result);
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
            $('#descri').html('');
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




$('#asc').click(function (e) {
    e.preventDefault();
    console.log(e);
    $.ajax({
        url: 'Modulo_php/catalog_q.php',
        dataType: 'json',
        type: 'post',
        data: 'as',
    })

        .done(function (result) {
            console.log(result);
            console.log('sussece' + result);
            $('#descri').html('');
            $.each(result, function (key, JsonCat) {
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
$('#des').click(function (e) {
    e.preventDefault();
    console.log(e);
    $.ajax({
        url: 'Modulo_php/catalog_q.php',
        dataType: 'json',
        type: 'post',
        data: 'des',
    })

        .done(function (result) {
            // console.log('sussece' + result);
            $('#descri').html('');
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