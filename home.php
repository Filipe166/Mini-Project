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

        .ssd .animated {
            height: 100px;
            background-image: url('');
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <?php include_once 'nav.php' ?>
    <section class="pub">
        <h2>IGN gives EVO15-S laptop a 9 out of 10</h2>
    </section>
    <section>
        <div class="header_img">
            <div class="col">
                <h1 class="display-5 font-weight-bold nvidia-green">GEFORCE® RTX 30 SERIES NOW AVAILABLE</h1>
                <h3 class="font-weight-light">CUSTOMIZE AN ORIGIN PC DESKTOP WITH GEFORCE RTX 30 SERIES TODAY</h3>
            </div>
        </div>
    </section>
    <section class="category">
        <div class="cat_inside">
            <ul class="cat_ul">
                <div class="cat_1 cat">
                    <img src="assets/BD/gaming-desktops-2.jpg" alt="">
                    <li><a href="#">Desktops</a></li>
                </div>
                <div class="cat_2 cat">
                    <img src="assets/BD/4.webp" alt="">
                    <li><a href="#">Laptops</a></li>
                </div>
                <div class="cat_3 cat">
                    <img src="assets/BD/unnamed-removebg-preview (2).png" alt="">
                    <li><a href="#">Computer components</a></li>
                </div>
                <div class="cat_4 cat">
                    <img src="assets/BD/gearshop-2.jpg" alt="">
                    <li><a href="#">Peripheral Devices</a></li>
                </div>
        </div>
        </ul>
    </section>
    <section class="ssd">
        <div class="animated">
            <h1 class="display-3 mb-0"><strong>SSD Performance Gamers Trust</strong></h1>
            <h2 class="font-weight-light">Samsung SSDs power the League of Legends Championship Series</h2>
        </div>
    </section>

</body>

</html>