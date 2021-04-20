<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" crossorigin="anonymous" />
</head>

<body>

    <?php
    session_start();
    if (isset($_POST['logout'])) {
        unset($_SESSION['email']);
        echo 'logged out';
        header('location: menu.php');
        exit();
    }


    ?>



    <section class="nav">
        <nav>
            <div class="icon">
                <i class="fas fa-music"></i>
                <h1>Spotify</h1>
            </div>
            <ul class="nav_ul m-scene" id="main">
                <div class="menu m-header scene_element scene_element--fadein">
                    <li class="navHover" class="line"><a href="home.php">Home</a>
                        <div class="line"></div>
                    </li>
                    <li class="navHover" class="line"><a href="songs.php">Songs</a>
                        <div class="line"></div>
                    </li>
                    <li class="navHover" class="line"><a href="artists.php">Artists</a>
                        <div class="line"></div>
                    </li>
                    <li class="navHover" class="line"><a href="playlists.php">Playlists</a>
                        <div class="line"></div>
                    </li>
                </div>
                <div class="register m-right-panel m-page scene_element scene_element--fadeinright">
                    <?php
                    if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                        echo '<form action="" method="POST">
                        <input type="submit" value="Logout" name="logout" class="logout">
                    </form>';
                        echo '<div class="vl"></div>';
                        echo '<li><a href="account.php">Account</a></li>';
                    } else {
                        echo '
                        <li><a href="register.php">Register</a></li>' .
                            '<div class="vl"></div>' .
                            '<li class="login"><a href="login.php">Login</a></li>';
                    }
                    ?>
                </div>
            </ul>
        </nav>
    </section>

</body>

</html>