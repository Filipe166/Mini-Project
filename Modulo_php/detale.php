<?php
include_once '../config/conn.php';
$id_prod = $_GET['id'];
echo $id_prod;

$selAll_q = ("SELECT p.id_products,p.name_products,p.relese_date_products,p.discription_products,p.post_products,p.price_products,c.name_categories
FROM products as p INNER JOIN categories as c on c.id_categories= p.id_cat
where p.id_products =  $id_prod ");
$selAll = mysqli_query($conn, $selAll_q);
$selAllArray = mysqli_fetch_all($selAll, MYSQLI_ASSOC);
var_dump($selAllArray);


?>

<body>
    <section>
        <?php foreach ($selAllArray as $key => $value) : ?>
            <article>

            </article>

        <?php endforeach ?>
    </section>
</body>