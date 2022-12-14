<?php

session_start();

$username = $_SESSION["username"];

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'usersettings':
        $title = 'user settings';
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
    <script src="/watcher/js/jquery-3.6.1.min.js"></script>
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="form-container">
        <form action="/watcher/include/usersetting.inc.php" method="post" class="f-c-p">
            <div class="p-settings">
                <img src="/watcher/assets/pic03.jpg" alt="p-img" class="p-img circle-img">
                <h1><?php echo $username ?></h1>
            </div>
            <div class="p-f-details">
                <div class="p-input">
                    <label for="username">Username</label>
                    <input required type="text" class="f-input" name="username" placeholder="<?php echo $username ?>" id="username">
                </div>
                <div class="p-input">
                    <label for="admincenter">password</label>
                    <input required type="password" class="f-input" placeholder="*********" name="admincenter" id="admincenter">
                </div>
            <div class="p-btn">
                <a href="/watcher/Admin/adminpanel.php"><button class="btn-p btn-cancel">Cancel</button></a>
                <button type="submit" class="btn-p btn-save">Save</button>
            </div>
        </form>
    </div>
        <div class="img-f">
            <img src="/watcher/assets/pic03.jpg" alt="f-image" class="img-f-p">
        </div>
    </div>
</body>
<style>
    @import '/watcher/Style/app.css';
    @import '/watcher/Style/form.css';
</style>
</html>