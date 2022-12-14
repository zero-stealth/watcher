<?php
session_start();

$username = $_SESSION["adminname"];

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'adminform':
        $title = 'sign in details | Admin ';
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
    <form action="../../include/adminform.inc.php" method="post" class="f-c-p">
        <div class="p-settings">
            <img src="/watcher/assets/pic02.jpg" alt="p-img" class="p-img circle-img">
            <h1> <?php echo $username; ?></h1>
        </div>
        <div class="p-f-details">
            <div class="p-input">
            <label for="firstname">first name</label>
            <input required type="text" class="f-input" name="first_name" placeholder="Sukuna" id="firstname">
            </div>
            <div class="p-input">
            <label for="secondname">second name</label>
            <input required type="text" class="f-input" name="last_name" placeholder="ryuen" id="secondname">
            </div>
            <div class="p-input">
            <label for="about">About</label>
            <input required type="text" class="a-input" placeholder="iam an admin and a commander " name="description" id="about">
            </div>
        </div>
        <div class="p-btn">
        <a href="/watcher/Admin/Authentication/adminlogin.php"><button class="btn-p btn-cancel">Cancel</button></a>
            <button type="submit" class="btn-p btn-save">Save</button>
        </div>
        </form>
        <div class="img-f">
            <img src="/watcher/assets/pic06.jpg" alt="f-image" class="img-f-p">
        </div>
    </div>
</body>
<style>
    @import '/watcher/Style/app.css';
    @import '/watcher/Style/form.css';
</style>
</html>