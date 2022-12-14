<?php

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'chieflogin':
        $title = 'Chief | Login ';
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
            <img src="/watcher/assets/pic02.jpg" alt="image on log in" class="login-image">
        </div>
        <!-- login container -->
        <div class="login-container">
            <div class="login-info">
                <h1>Login </h1>
                <form action="../../include/chieflogin.inc.php" method="post" class="form-container">
                    <input class="input" type="text" placeholder="username" name="username" required>
                    <input class="input" type="password" placeholder="password" name="password" required>
                    <a href="#" class="forgot-link">forgot password</a>
                    <button class="btn-authenticate" type="submit">Log in</button>
                    <a href="./chiefsignin.php" class="link">Don't have an account?<span>Sign in </span></a>
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