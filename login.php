<?php include_once 'nav.php'; ?>

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
        <a href="register.php">Don't have an account yet? Click here to go to register.</a> <br>
        <a href="register.php">Forgot your password?</a>

    </form>
</body>

</html>

<?php
include_once 'config/conn.php';
include_once 'nav.php';

// If form was submitted
if (isset($_POST['login'])) {

    $mail = trim($_POST['email']);
    $password = trim($_POST['password']);

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $query = "SELECT * FROM user WHERE email_user = '$mail'";

    $results = mysqli_query($conn, $query);

    // How many records did I get ?
    $nb_records = mysqli_num_rows($results);

    // Does the user exists in my db ?
    if ($nb_records > 0) {
        $mail = mysqli_fetch_assoc($results);
        // Check if passwords matches
        if (password_verify($password, $mail['password'])) {
            session_start();
            // Save the mail (from my form) into the session
            $_SESSION['mail'] = $_POST['email'];
            echo '<a href="account.php">Go to account page</a>';
        } else {
            echo 'Password doesnt match';
        }
    } else {
        echo "Wrong credentials.";
    }
}
?>