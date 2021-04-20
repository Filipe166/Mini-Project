<?php
include_once '../config/conn.php';
if (isset($_POST['cat'])) {

    $id_prod = $_POST['cat'];

    $selAll_q = ("SELECT p.id_products,p.name_products,p.relese_date_products,p.discription_products,p.post_products,p.price_products,c.name_categories
    FROM products as p INNER JOIN categories as c on c.id_categories= p.id_cat
    where c.id_categories =  $id_prod ");
} else {
    $selAll_q = ("SELECT p.id_products,p.name_products,p.relese_date_products,p.discription_products,p.post_products,p.price_products,c.name_categories
FROM products as p INNER JOIN categories as c on c.id_categories= p.id_cat ");
}


$selAll = mysqli_query($conn, $selAll_q);
$selAllArray = mysqli_fetch_all($selAll, MYSQLI_ASSOC);
// move to json
$JsonCat = json_encode($selAllArray, JSON_PRETTY_PRINT);
echo $JsonCat;
