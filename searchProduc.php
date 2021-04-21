<?php
require_once('includes/conn.php');

function get_product($conn, $term)
{
    $query = "SELECT * FROM products WHERE name_products LIKE '%" . $term . "%' ORDER BY name_products ASC";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $data;
}

if (isset($_GET['term'])) {
    $getProducs = get_product($conn, $_GET['term']);
    $list = array();
    foreach ($getProducs as $city) {
        $list[] = $city['name_products'];
    }
    $arrayProd = json_encode($list);
    echo $arrayProd;


}
