<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="styles/style.css">
  <style>
    nav {
      width: 100%;
    }

    .header_ul {
      margin-top: 30px;
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
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .search_Pro label {
      color: white;

    }

    .col-md-4 {
      display: flex;
      gap: 20px;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
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
            <li><a href="">Categories</a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <div class="addProducts">
              <li><a href="#">Add a product</a></li>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <!-- <div class="search_Cat">
                <label>Category:</label>
                <input type="search" name="city" id="search" placeholder="Type to search..." class="form-control">
              </div> -->
              <div class="search_Pro">
                <label>Producs:</label>
                <input type="search" name="city" id="searchProduc" placeholder="Type to search..." class="form-control">
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
        $("#search").autocomplete({
          source: 'searchbar.php',
        });
        $("#searchProduc").autocomplete({
          source: 'searchProduc.php',
        });
      });
    </script>

  </header>







</body>

</html>