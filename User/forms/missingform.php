<?php

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'missingform':
        $title = 'missing report ';
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
    <form action="../../include/missingform.inc.php" method="post" class="f-c-p">
        <div class="p-f-details">
            <div class="p-input">
            <label for="firstname">first name</label>
            <input required type="text" class="f-input" name="firstname" placeholder="omondi" id="firstname">
            </div>
            <div class="p-input">
            <label for="secondname">second name</label>
            <input required type="text" class="f-input" name="secondname" placeholder="jalang" id="secondname">
            </div>
            <div class="p-input">
            <label for="seen">last seen</label>
            <input required type="date" class="f-input" placeholder="yyy/mm/dd" name="last_seen" id="seen">
            </div>
            <div class="p-input">
            <label for="reported">Date reported</label>
            <input required type="date" class="f-input" placeholder="yyy/mm/dd" name="date_reported" id="reported">
            </div>
            <div class="p-input">
            <label for="about">Description</label>
            <input required type="text" class="a-input" placeholder="has a hoodie and a scar on his right eye " name="description" id="about">
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