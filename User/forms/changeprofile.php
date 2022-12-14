<?php

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'changeprofile':
        $title = 'Profile settings';
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
        <form action="" method="post" class="f-c-p">
            <div class="p-settings">
                <img src="" alt="p-img" class="p-img circle-img">
                <h1>Sukuna ryuen</h1>
            </div>
            <div class="p-f-details">
                <div class="p-input">
                    <label for="username">Username</label>
                    <input required type="text" class="f-input" name="username" placeholder="Sukuna ryuen" id="username">
                </div>
                <div class="p-input">
                    <label for="admincenter">Admin center</label>
                    <input required type="text" class="f-input" placeholder="Sukuna ryuen" name="admincenter" id="admincenter">
                </div>
                <div class="p-input">
                    <label for="commandcenter">Command center</label>
                    <input required type="text" class="f-input" placeholder="Strike view" name="commandcenter" id="commandcenter">
                </div>
                <div class="p-input">
                    <label for="commandertitle">Commander title</label>
                    <input required type="text" class="f-input" placeholder="leader" name="commandertitle" id="commandertitle">
                </div>
                <div class="p-input">
                    <label for="about">About</label>
                    <input required type="text" class="a-input" placeholder="iam an admin and a commander " name="about" id="about">
                </div>
            </div>
            <div class="p-btn">
                <a href="#"><button class="btn-p btn-cancel">Cancel</button></a>
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