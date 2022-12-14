<?php

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'chiefsignin':
        $title = 'Chief | Sign in ';
        break;
    default;
        $title = 'page not found';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/watcher/assets/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/watcher/js/jquery-1.9.1.min.js"></script>
    <title><?php echo $title ?></title>
</head>

<body>
    <!-- log in section -->
    <div class="login-section">
        <!-- image container -->
        <div class="login-image-container">
            <img src="/watcher/assets/pic06.jpg" alt="image on log in" class="login-image">
        </div>
        <!-- login container -->
        <div class="login-container">
            <div class="login-info">
                <h1>Signin </h1>
                <form action="../../include/chiefsignin.inc.php" method="post" class="form-container">
                    <input class="input" type="text" placeholder="username" name="username" required>
                    <input class="input" type="password" placeholder="password minimum 5 characters" name="password" required>
                    <a href="#" class="forgot-link">forgot password</a>
                    <button class="btn-authenticate" type="submit">Sign in</button>
                    <a href="./chieflogin.php" class="link">Already have an account?<span>Log in </span></a>
                </form>
            </div>
        </div>
    </div>
</body>
<style>
    @import '/watcher/Style/authorization.css';
    @import '/watcher/Style/app.css';
</style>

</html>