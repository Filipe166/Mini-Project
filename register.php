<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    include_once 'config/conn.php';
    include_once 'nav.php';

    session_start();
    $errors = array();

    if (isset($_POST['reg'])) {
        // Validations of the inputs
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $sanitizeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $password = trim($_POST['password']);
        $password_confirm = trim($_POST['password_confirm']);

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
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
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
                    echo 'Insert successfull.';
                    echo '<a href="account.php">Go to account page</a>';
                } else
                    echo 'Something went wrong inserting.';
            }
        }
    }


    ?>

    <h2>Register</h2>
    <form action="" method="post">
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

</body>

</html>