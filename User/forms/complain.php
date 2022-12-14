<?php

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'complain':
        $title = 'complain report ';
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
    <form action="../../include/complain.inc.php" method="post" class="f-c-p">
        <div class="p-f-details">
            <div class="p-input">
            <label for="username">username</label>
            <input required type="text" class="f-input" name="username" placeholder="Sukuna ryuen" id="username">
            </div>
            <div class="p-input">
            <label for="firstname">complainer's first name</label>
            <input required type="text" class="f-input" name="firstname" placeholder="Sukuna ryuen" id="firstname-c">
            </div>
            <div class="p-input">
            <label for="secondname">complainer's second name</label>
            <input required type="text" class="f-input" name="secondname" placeholder="Sukuna ryuen" id="secondname-c">
            </div>
            <div class="p-input">
            <label for="complain">The complain</label>
            <input required type="text" class="a-input" placeholder="your complains " name="complain" id="complain">
            </div>
        </div>
        <div class="p-btn">
        <a href="../../User/userpanel.php"><button class="btn-p btn-cancel">Cancel</button></a>
            <button type="submit" class="btn-p btn-save">Save</button>
        </div>
        </form>
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