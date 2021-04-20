<?php
require_once('connection.php');

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
