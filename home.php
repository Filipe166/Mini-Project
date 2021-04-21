<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header_img {
            height: 85vh;
            background-image: url('assets/BD/nvidia.jpg');
            background-repeat: no-repeat;
            position: relative;

        }

        .pub {
            width: 100%;
            height: 50px;
            text-align: center;
            background-color: red;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .col {
            position: absolute;
            top: 30%;
            left: 5%;
        }

        .display-5 {
            color: #76b900;
        }

        .category {
            background-color: #1e1f23;
            width: 100%;

        }

        .cat_inside {
            width: 100%;
            height: 300px;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cat_ul {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            flex-direction: row;
            margin: auto;
        }

        .cat_ul div img {
            width: 300px;
            min-width: 300px;
            height: 200px;

        }

        .cat_ul {
            gap: 100px;
        }

        .cat li {
            list-style: none;
            text-align: center;

        }

        .cat li a {
            color: white;
            text-decoration: none;

        }

        .card_ssd_img {
            width: 100%;
            height: 500px;
            background-image: url('assets/BD/samsung-870-qvo.jpg');
            background-size: cover;
            position: relative;
        }

        .card_ssd {
            position: absolute;
            top: 30%;
            left: 5%;
        }

        .btn {
            display: block;
            margin-top: 10px;
            border: none;
            background-color: red;
            color: white;
            width: 120px;
            height: 40px;
            border-radius: 10px;
            padding: 10px 20px;
            text-decoration: none;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include_once 'nav-home.php' ?>
    <section class="pub">
        <h2>IGN gives EVO15-S laptop a 9 out of 10</h2>
    </section>
    <section>
        <div class="header_img">
            <div class="col">
                <h1 class="display-5 font-weight-bold nvidia-green">GEFORCE® RTX 30 SERIES NOW AVAILABLE</h1>
                <h3 class="font-weight-light">CUSTOMIZE AN ORIGIN PC DESKTOP WITH GEFORCE RTX 30 SERIES TODAY</h3>
                <a class="btn btn-home" href="3">Shop Now</a>
            </div>
        </div>
    </section>
    <section class="category">
        <div class="cat_inside">
            <ul class="cat_ul">
                <div class="cat_1 cat">
                    <li>
                        <a href="Modulo_php/fullCat.php?cat=1">
                            <img src="assets/BD/gaming-desktops-2.jpg" alt="">
                            Desktops
                        </a>
                    </li>

                </div>

                <div class="cat_2 cat">

                    <li>
                        <a href="Modulo_php/fullCat.php?cat=2">
                            <img src="assets/BD/4.webp" alt="">
                            Laptops
                        </a>
                    </li>
                </div>
                <div class="cat_3 cat">

                    <li>
                        <a href="Modulo_php/fullCat.php?cat=3">
                            <img src="assets/BD/unnamed-removebg-preview (2).png" alt="">
                            Computer components
                        </a>
                    </li>
                </div>
                <div class="cat_4 cat">

                    <li>
                        <a href="Modulo_php/fullCat.php?cat=4">
                            <img src="assets/BD/gearshop-2.jpg" alt="">
                            Peripheral Devices
                        </a>
                    </li>
                </div>
        </div>
        </ul>
    </section>
    <section class="card_ssd_img">
        <div class="card_ssd">
            <h1 class="card_ssd_t"><strong>SSD Performance Gamers Trust</strong></h1>
            <h2 class="card_ssd_t">Samsung SSDs power the League of Legends Championship Series</h2>
        </div>
    </section>
    <?php include_once 'footer.php' ?>

</body>

</html>