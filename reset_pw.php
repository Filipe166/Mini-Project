<?php
session_start();
include_once 'config/conn.php';
if (isset($_POST['submit'])) {
    $user_id = $_POST['user'];
    $result = mysqli_query($conn, "SELECT * FROM user where id_user='" . $_POST['user_id'] . "'");
    $row = mysqli_fetch_assoc($result);
    $fetch_user_id = $row['user'];
    $email_id = $row['email'];
    $password = $row['password'];
    if ($user_id == $fetch_user_id) {
        $to = $email_id;
        $subject = "Password";
        $txt = "Your password is : $password.";
        $headers = "From: password@studentstutorial.com" . "\r\n" .
            "CC: somebodyelse@example.com";
        mail($to, $subject, $txt, $headers);
    } else {
        echo 'invalid userid';
    }
}
?>
<!DOCTYPE HTML>
<html>

<body>
    <h1>Forgot Password<h1>
            <form action='' method='post'>
                <table cellspacing='5' align='center'>
                    <tr>
                        <td>user id:</td>
                        <td><input type='text' name='user_id' /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type='submit' name='submit' value='Submit' /></td>
                    </tr>
                </table>
            </form>
</body>

</html>