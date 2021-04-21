<!doctype html>
<html lang="en">

<head>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <label>Category:</label>
        <input type="text" name="city" id="search" placeholder="Type to search..." class="form-control">
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function() {
      $("#search").autocomplete({
        source: 'searchbar.php',
      });
    });
  </script>

</body>

</html>