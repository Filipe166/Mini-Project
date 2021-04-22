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

    .search_Cat {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .search_Cat label {
      color: white;
    }

    .search_Pro {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 10px;
    }

    .search_Pro label {
      color: white;

    }

    .col-md-4 {
      display: flex;
      gap: 20px;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
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
        <div class="container">
          <div class="row">
            <div class="col-md-4">

              <div class="search_Pro">
                <label>Producs:</label>
                <input type="search" name="city" id="searchProduc" placeholder="Type to search Product" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="login">
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
        </div>
      </ul>
    </nav>

    <script type="text/javascript">
      $(function() {
        $("#searchProduc").autocomplete({
          source: 'searchProduc.php',
        });
      });
    </script>

  </header>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

</body>

</html>