<?php
require_once('includes/conn.php');

function get_city($conn, $term)
{
	$query = "SELECT * FROM categories WHERE name_categories LIKE '%" . $term . "%' ORDER BY name_categories ASC";
	$result = mysqli_query($conn, $query);
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $data;
}

if (isset($_GET['term'])) {
	$getCity = get_city($conn, $_GET['term']);
	$list = array();
	foreach ($getCity as $city) {
		$list[] = $city['name_categories'];
	}
	echo json_encode($list);
}

// function get_product($conn, $term)
// {
// 	$query = "SELECT * FROM products WHERE name_products LIKE '%" . $term . "%' ORDER BY name_products ASC";
// 	$result = mysqli_query($conn, $query);
// 	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
// 	return $data;
// }

// if (isset($_GET['term'])) {
// 	$getProducs = get_product($conn, $_GET['term']);
// 	$list = array();
// 	foreach ($getProducs as $city) {
// 		$list[] = $city['name_products'];
// 	}
// 	echo json_encode($list);
// }
