<?php

session_start();

$username = $_SESSION["chiefname"];

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'chiefform':
        $title = 'Sign in details | Chief ';
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
        <form action="../../include/chiefform.inc.php" method="post" class="f-c-p">
        <div class="p-settings">
            <img src="/watcher/assets/special-ops.jpg" alt="p-img" class="p-img circle-img">
            <h1><?php echo $username; ?></h1>
        </div>
        <div class="p-f-details">
            <div class="p-input">
            <label for="firstname">first name</label>
            <input required type="text" class="f-input" name="first_name" placeholder="brain" id="firstname">
            </div>
            <div class="p-input">
            <label for="secondname">last name</label>
            <input required type="text" class="f-input" name="last_name" placeholder="omondi" id="secondname">
            </div>
            <div class="p-input">
            <label for="u-name">user name</label>
            <input required type="text" class="f-input" name="user_name" placeholder="<?php echo $username; ?>" id="secondname">
            </div>
            <div class="p-input">
            <label for="secondname">email</label>
            <input required type="email" class="f-input" name="email" placeholder="name@gmail.com" id="secondname">
            </div>
            <div class="p-input">
            <label for="gender">Gender</label>
            <input required type="text" class="f-input" placeholder="Male|female " name="gender" id="gender">
            </div>
            <div class="p-input">
            <label for="birth">Date of birth</label>
            <input required type="date" class="f-input" placeholder="mm/dd/yyyy" name="date_of_birth" id="birth">
            </div>
            <div class="p-input">
            <label for="join">Date of join</label>
            <input required type="date" class="f-input" placeholder="mm/dd/yyyy" name="date_of_join" id="join">
            </div>
            <div class="p-input">
            <label for="phone">Phone number</label>
            <input required type="number" class="f-input" placeholder="073454353" name="phone_number" id="phone">
            </div>
            <div class="p-input">
            <label for="service">Service no</label>
            <input required type="number" class="f-input" placeholder="3254355" name="service_number" id="service">
            </div>
            <div class="p-input">
            <label for="rank">Rank id</label>
            <input required type="number" class="f-input" placeholder="3545433" name="rank_id" id="rank">
            </div>
            <div class="p-input">
            <label for="status">Status id</label>
            <input required type="number" class="f-input" placeholder="2345678" name="status_id" id="status">
            </div>
        </div>
        <div class="p-btn">
        <a href="/watcher/Chief/Authentication/chieflogin.php"><button class="btn-p btn-cancel">Cancel</button></a>
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