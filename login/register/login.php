<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <h2>Login</h2>
        <input type="text" placeholder="Firstname">
        <input type="text" placeholder="Lastname">
        <input type="text" placeholder="E-mail">
        <input type="text" placeholder="Password">
        <input type="submit" name="login" value="Log In">
    </form>
</body>

</html>

<?php
include_once 'database.php';
include_once 'nav.php';

// If form was submitted
if (isset($_POST['login'])) {

    $mail = trim($_POST['email']);
    $password = trim($_POST['password']);

    $conn = mysqli_connect('localhost', 'root', '', 'user_db');

    $query = "SELECT * FROM users WHERE email = '$mail'";

    $results = mysqli_query($conn, $query);

    $nb_records = mysqli_num_rows($results);

    if ($records == 1) {
        if (password_verify($_POST['password'], $data_user['password'])) {
            echo '<p class="log"> You are logged in</p>';
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['firstname'] = $data_user['first_name'];
            $_SESSION['lastname'] = $data_user['last_name'];
            header('location: home.php');
        } else {
            echo '<p class="log"> Password does not match</p>';
        }
    } else {
        echo '<p class="log"> Wrong credentials </p>';
    }
}
?>