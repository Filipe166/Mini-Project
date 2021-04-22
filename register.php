<?php

include_once 'includes/conn.php';
include_once 'nav.php';

session_start();
$errors = array();
$sucess = array();

if (isset($_POST['reg'])) {
    // Validations of the inputs
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $sanitizeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars(trim($_POST['password']));
    $password_confirm = htmlspecialchars(trim($_POST['password_confirm']));

    if (empty($firstname)) {
        $errors['firstname'] = 'First name is mandatory.<br>';
    }

    if (empty($lastname)) {
        $errors['lastname'] = 'Last name is mandatory.<br>';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is mandatory.<br>';
    }
    if (strlen($password) < 8) {
        $errors['password'] = 'Password should have at least 8 characters.<br>';
    }
    if ($password != $password_confirm) {
        $errors['password_confirm'] = 'Passwords must match.<br>';
    }

    if (!filter_var($sanitizeEmail, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email has to be a valid one.<br>';
    }

    if (count($errors) == 0) {

        $query = "SELECT * FROM user WHERE email_user = '$sanitizeEmail'";

        $_SESSION['email'] = $_POST['email'];
        $resultMail = mysqli_query($conn, $query);

        if (mysqli_num_rows($resultMail) > 0) {
            $errors['email'] = 'Email already taken';
        } else {
            // Hash the password
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            // Prepare query
            $query = "INSERT INTO user(fname_user,lname_user, email_user, password)
                VALUES('$firstname', '$lastname', '$sanitizeEmail', '$hashPassword')";

            // Execute the query
            $result = mysqli_query($conn, $query);

            if ($result) {
                $sucess['subscrit'] = 'Insert successfull';

                header("Refresh:2; url=home.php");
            } else
                echo 'Something went wrong inserting.';
        }
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

<body>

    <form action="" method="post">
        <h2>Register</h2>
        <input type="text" name="firstname" placeholder="First Name"><br>
        <?php if (isset($errors['firstname'])) echo $errors['firstname'] ?>

        <input type="text" name="lastname" placeholder="Last Name"><br>
        <?php if (isset($errors['lastname'])) echo $errors['lastname'] ?>

        <input type="email" name="email" placeholder="Email"><br>
        <?php if (isset($errors['email'])) echo $errors['email'] ?>

        <input type="password" name="password" placeholder="Password"><br>
        <?php if (isset($errors['password'])) echo $errors['password'] ?>

        <input type="password" name="password_confirm" placeholder="Confirm password"><br>
        <?php if (isset($errors['password_confirm'])) echo $errors['password_confirm'] ?>

        <input type="submit" name="reg" value="Register">
    </form>
    <div class="msg">
        <?php if (isset($sucess['subscrit'])) echo $sucess['subscrit'] ?>

    </div>
</body>

</html>