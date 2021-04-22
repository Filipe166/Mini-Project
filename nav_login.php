<head>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        nav {
            width: 100%;
        }

        .header_ul {
            margin-top: 30px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            list-style: none;
            justify-content: space-between;
        }

        .header_li {

            display: flex;
            align-items: center;
            list-style: none;
            justify-content: start;
        }

        .header_cats {
            margin-left: 10px;
            display: flex;
            align-items: center;
            list-style: none;
            justify-content: start;
        }

        .header_ul li a {
            padding: 10px;
            color: white;
            text-decoration: none;
        }

        .logo img {
            width: 60px;
        }

        .login {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="header_nav">
            <ul class="header_ul">
                <div class="header_li">
                    <li class="logo"><img src="assets/BD/logo-2-removebg-preview.png" alt=""></li>
                    <div class="header_cats">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="products.php">Our Products</a></li>
                        <div class="addProducts">
                            <li><a href="marketplace.php">Add a product</a></li>
                        </div>
                    </div>
                </div>

                <div class="login">
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </div>
            </ul>
        </nav>
    </header>

</body>

</html>