<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            width: 300px;
            height: 400px;
            margin: auto;
            background-color: white;
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: black;
            border-radius: 10px;
        }

        form input {
            padding: 10px;
        }

        form a {
            color: gray;
            text-decoration: none;
        }

        form h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        input[type=submit] {
            width: 100px;
            border: none;


        }

        form div {
            height: 100%;
            width: 90%;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>


<?php include_once 'nav_login.php' ?>

<body>


    <form action="" method="POST">
        <div>
            <h2>Login</h2>
            <input type="email" name="email" placeholder="E-mail"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" name="login" value="Log In"> <br>
            <a href="register.php">Don't have an account yet? Click here to go to register.</a> <br>
            <a href="reset_pw.php">Forgot your password?</a>
        </div>
        <?php
        include_once 'includes/conn.php';
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


</html>