<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form_content {
            width: 300px;
            padding: 10px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;

        }

        .error {
            color: red;
        }

        section {
            display: flex;
            justify-content: center;
        }

        .inserted {
            color: green;
        }

        .notInsert {
            color: red;
        }
    </style>
</head>

<body>

    <?php
    include_once 'includes/conn.php';

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $queryCategories = "SELECT name_categories, id_categories FROM categories";

    $resultsCategories = mysqli_query($conn, $queryCategories);

    $categories = mysqli_fetch_all($resultsCategories, MYSQLI_ASSOC);
    $errors = array();

    $name_products = '';
    $release_date_products = '';
    $description_products = '';
    $price_products = '';

    if (isset($_POST['submitBtn'])) {
        $name_products = trim($_POST['name_products']);
        $release_date_products = trim($_POST['release_date_products']);
        $description_products = trim($_POST['description_products']);
        $price_products = trim($_POST['price_products']);
        $categories = $_POST['categories'];

        if (empty($name_products)) {
            $errors['name_products'] = 'Produc name is mandatory. <br>';
        }
        if (empty($release_date_products)) {
            $errors['release_date_products'] = 'Product release date is mandatory. <br>';
        }
        if (empty($description_products)) {
            $errors['description_products'] = 'Description is mandatory. <br>';
        }
        if (empty($price_products)) {
            $errors['price_products'] = 'Price is mandatory. <br>';
        }
        if (empty($categories)) {
            $errors['categories'] = 'Categories is mandatory. <br>';
        }
        if ($_FILES['product_img']['error'] != UPLOAD_ERR_NO_FILE && $_FILES['product_img']['error'] != UPLOAD_ERR_OK) {
            $errors['product_img'] = 'Error while downloading photo.';
        }


        if (count($errors) == 0) {

            $fileName = '';

            if ($_FILES['product_img']['error'] != UPLOAD_ERR_NO_FILE) {
                $extFoundInArray = array_search(
                    $_FILES['product_img']['type'],
                    array(
                        'jpg' => 'image/jpeg',
                        'png' => 'image/png',
                        'gif' => 'image/gif',
                    )
                );
                if ($extFoundInArray === false) {
                    echo ('File is not an image ! Upload canceled.');
                } else {
                    $shaFile = sha1_file($_FILES['product_img']['tmp_name']);
                    $nbFiles = 0;

                    do {
                        $fileName = $shaFile . $nbFiles . '.' . $extFoundInArray;
                        $fullPath = './uploads/' . $fileName;
                        $nbFiles++;
                    } while (file_exists($fullPath));

                    $moved = move_uploaded_file($_FILES['product_img']['tmp_name'], $fullPath);
                }
            }


            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            $query = "INSERT INTO products (name_products, relese_date_products, discription_products, post_products, price_products, id_cat) VALUES ('$name_products', '$release_date_products', '$description_products', '$fileName', ' $price_products', '$categories')";

            $results = mysqli_query($conn, $query);

            var_dump($results);

            if ($results)
                echo '<div class="inserted">Insert successfull.</div>';
            else
                echo '<div class="notInsert>"Something went wrong inserting.</div>';
        }
    }
    ?>

    <section>
        <form enctype="multipart/form-data" action="" method="POST" id="form">
            <div class="form_content">
                <label for="name_product">Name for the product</label>
                <input type="text" name="name_products" id="name_product" placeholder="BigBoiGamerRig69">
                <span class="error"><?php if (isset($errors['name_products'])) echo $errors['name_products']; ?></span>

                <label for="release_date">Release date</label>
                <input type="date" name="release_date_products" id="release_date">
                <span class="error"><?php if (isset($errors['release_date_products'])) echo $errors['release_date_products']; ?></span>

                <label for="description">Description for the product</label>
                <textarea name="description_products" id="description" cols="30" rows="10" placeholder="420 fueled rig in Gfuel and sweet" value="<?= $description; ?>"></textarea>
                <span class="error"><?php if (isset($errors['description_products'])) echo $errors['description_products']; ?></span>

                <label for="price">Price of the product</label>
                <input type="number" name="price_products" id="price" step="0.01" placeholder="State price in dollars ($)">
                <span class="error"><?php if (isset($errors['price_products'])) echo $errors['price_products']; ?></span>

                <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                <label for="product_img">Select a photo :</label>
                <input type="file" name="product_img"><br>
                <span class="error"><?php if (isset($errors['product_img'])) echo $errors['product_img']; ?></span>

                <label for="categories">Categorie</label>
                <select name="categories" id="categories">
                    <span class="error"><?php if (isset($errors['categories'])) echo $errors['categories']; ?></span>
                    <?php
                    foreach ($categories as $key => $value) : ?>
                        <option value="<?php echo $categories[$key]['id_categories']; ?>"> <?php echo $categories[$key]['name_categories']; ?> </option>

                    <?php endforeach ?>
                    <input type="submit" value="Register Product" name="submitBtn">
            </div>
        </form>

        <?php

        $err = array();
        $categoryName = '';

        if (isset($_POST['CatSub'])) {
            $categoryName = $_POST['categoryName'];


            if (empty($categoryName)) {
                $err['categoryName'] = 'Category Name is mandatory';
            }
            if ($_FILES['cat_img']['error'] != UPLOAD_ERR_NO_FILE && $_FILES['cat_img']['error'] != UPLOAD_ERR_OK) {
                $err['cat_img'] = 'Error while downloading photo.';
            }
            if (count($err) == 0) {
                $fileName = '';

                if ($_FILES['cat_img']['error'] != UPLOAD_ERR_NO_FILE) {
                    $extFoundInArray = array_search(
                        $_FILES['cat_img']['type'],
                        array(
                            'jpg' => 'image/jpeg',
                            'png' => 'image/png',
                            'gif' => 'image/gif',
                        )
                    );
                    if ($extFoundInArray === false) {
                        echo ('File is not an image ! Upload canceled.');
                    } else {
                        $shaFile = sha1_file($_FILES['cat_img']['tmp_name']);
                        $nbFiles = 0;

                        do {
                            $fileName = $shaFile . $nbFiles . '.' . $extFoundInArray;
                            $fullPath = './uploads/cat_img' . $fileName;
                            $nbFiles++;
                        } while (file_exists($fullPath));

                        $moved = move_uploaded_file($_FILES['cat_img']['tmp_name'], $fullPath);
                    }
                }
                $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                $query = "INSERT INTO categories (name_categories, post_cat) VALUES ('$categoryName', '$fileName');";

                $results = mysqli_query($conn, $query);


                if ($results) {

                    echo '<div class="inserted">Insert successfull.</div>';
                } else
                    echo 'Something went wrong inserting.';
            }
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form_content">
                <label for="categoryName">Category</label>
                <span class="error"><?php if (isset($err['categoryName'])) echo $err['categoryName']; ?></span>
                <input type="text" name="categoryName">
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                <label for="cat_img">Select a photo :</label>
                <input type="file" name="cat_img"><br>
                <input type="submit" value="Register Category" name="CatSub">
            </div>
        </form>
    </section>



</body>

</html>