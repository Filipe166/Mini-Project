<?php
include_once '../includes/conn.php';

if (isset($_GET['cat'])) {
    $cat = $_GET['cat'];

    if ($cat == 1) {
        $selAll_q = ("SELECT p.id_products,p.name_products,p.relese_date_products,p.discription_products,p.post_products,p.price_products,c.name_categories
          FROM products as p INNER JOIN categories as c on c.id_categories= p.id_cat
           where c.id_categories = 1   ");
    } elseif ($cat == 2) {
        $selAll_q = ("SELECT p.id_products,p.name_products,p.relese_date_products,p.discription_products,p.post_products,p.price_products,c.name_categories
        FROM products as p INNER JOIN categories as c on c.id_categories= p.id_cat
        where c.id_categories = 2  ");
    } elseif ($cat == 3) {
        $selAll_q = ("SELECT p.id_products,p.name_products,p.relese_date_products,p.discription_products,p.post_products,p.price_products,c.name_categories
        FROM products as p INNER JOIN categories as c on c.id_categories= p.id_cat
        where c.id_categories = 3  ");
    } elseif ($cat == 4) {
        $selAll_q = ("SELECT p.id_products,p.name_products,p.relese_date_products,p.discription_products,p.post_products,p.price_products,c.name_categories
        FROM products as p INNER JOIN categories as c on c.id_categories= p.id_cat
        where c.id_categories = 4  ");
    }
    $selAll = mysqli_query($conn, $selAll_q);
    $selAllArray = mysqli_fetch_all($selAll, MYSQLI_ASSOC);
    //var_dump($selAllArray);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once '../nav.php';

    ?>

    <section>
        <?php foreach ($selAllArray as $key => $produt) : ?>

            <article>
                <div>
                    <img src="../uploads/ <?php echo $produt['post_products']  ?>" alt="" srcset="">
                </div>
                <div>
                    <h2><?php echo $produt['name_products']  ?></h2>
                    <p><?php echo $produt['relese_date_products']  ?></p>
                    <p><?php echo $produt['price_products']  ?></p>
                    <p><?php echo $produt['discription_products']  ?></p>


                </div>

            </article>

        <?php endforeach ?>
    </section>

</body>

</html>