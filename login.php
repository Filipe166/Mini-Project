<?php
include_once 'includes/conn.php';
include_once 'nav.php';




// If form was submitted
if (isset($_POST['login'])) {

    $mail = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));


    $query = "SELECT * FROM user WHERE email_user = '$mail'";
    $results = mysqli_query($conn, $query);
    $nb_records = mysqli_num_rows($results);

    // Does the user exists in my db ?
    if ($nb_records == 1) {
        $mail = mysqli_fetch_assoc($results);
        // Check if passwords matches
        if (password_verify($password, $mail['password'])) {
            session_start();
            // Save the mail (from my form) into the session
            $_SESSION['email'] = $_POST['email'];
            header('location:account.php');
        } else {
            echo 'Password doesnt match';
        }
    } else {
        echo "Wrong credentials.";
    }
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
    <form action="" method="POST">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="E-mail"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="login" value="Log In"> <br>

        Don't have an account yet? <a href="register.php"> Click here </a> to go to register.<br>
        <!-- <a href="reset_pw.php">Forgot your password?</a> -->

    </form>
</body>

</html>