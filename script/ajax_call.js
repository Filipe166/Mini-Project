
function done(result) {
    $('#descri').html('');
    $.each(result, function (key, JsonCat) {
        console.log(JsonCat);

        $('#descri').append("<img src=" + 'uploads/' + JsonCat.post_products + " >")
        $('#descri').append("<div> " + JsonCat.name_products + "</div>")
        $('#descri').append("<div> " + JsonCat.relese_date_products + "</div>")
        $('#descri').append("<div> " + JsonCat.discription_products + "</div>")
        $('#descri').append("<div> " + JsonCat.price_products + "</div>")
        $('#descri').append("<div> " + JsonCat.name_categories + "</div>")
        $('#descri').append('<p> <a href= "Modulo_php/detale.php?id=' + JsonCat.id_products + '">Detaill</a></div>')


    })
}
function fail(result) {
    console.log('Ajax fail' + result);
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
            fail(result)
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
            done(result);
        })
        .fail(function (result) {
            fail(result)
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
            done(result);
        })
        .fail(function (result) {
            fail(result)
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
            done(result);
        })
        .fail(function (result) {
            fail(result)
        })

})


//click