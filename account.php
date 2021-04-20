<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Your Account Page</h1>
    <form action="" method="POST">
        <input type="submit" value="Log out" name="logout">
    </form>

    <?php
    session_start();

    // Do I got a mail in my session ?
    if (isset($_SESSION['mail'])) {
        // Someone loggued in
        echo 'Welcome, ' . $_SESSION['mail'];
    } else {
        // Someone try to access the page without log in
        header('location: login.php');
        exit();
    }

    // Log out process :
    if (isset($_POST['logout'])) {
        // session_destroy();
        unset($_SESSION['mail']);
        header('location: login.php');
        exit();
    }

    ?>



</body>

</html>