<?php

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'officerform':
        $title = 'sign in details | Officer ';
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
        <form action="../../include/officerform.inc.php" method="post" class="f-c-p">
        <!-- <div class="p-settings">
            <img src="" alt="p-img" class="p-img circle-img">
            <h1>Sukuna ryuen</h1>
        </div> -->
        <div class="p-f-details">
        <div class="p-input">
            <label for="firstname">first name</label>
            <input required type="text" class="f-input" name="first_name" placeholder="Brian" id="firstname">
            </div>
            <div class="p-input">
            <label for="secondname">last name</label>
            <input required type="text" class="f-input" name="last_name" placeholder="liam" id="secondname">
            </div>
            <div class="p-input">
            <label for="username">User name</label>
            <input required type="text" class="f-input" name="user_name" placeholder="jin" id="secondname">
            </div>
            <div class="p-input">
            <label for="mail">email</label>
            <input required type="email" class="f-input" placeholder="email" name="email" id="email">
            </div>
            <div class="p-input">
            <label for="gender">Gender</label>
            <input required type="text" class="f-input" placeholder="Male|female " name="gender" id="gender">
            </div>
            <div class="p-input">
            <label for="birth">date of birth</label>
            <input required type="date" class="f-input" placeholder="dd/mm/yyyy" name="date_of_birth" id="birth">
            </div>
            <div class="p-input">
            <label for="phone">phone number</label>
            <input required type="number" class="f-input" placeholder="07324534543" name="phone_number" id="number">
            </div>
            <div class="p-input">
            <label for="service">Servicer id</label>
            <input required type="number" class="f-input" placeholder="334553" name="service_number" id="rank">
            </div>
            <div class="p-input">
            <label for="rank">Rank id</label>
            <input required type="number" class="f-input" placeholder="3545433" name="rank_id" id="rank">
            </div>
            <div class="p-input">
            <label for="join">Date of join</label>
            <input required type="date" class="f-input" placeholder="yyyy/mm/dd" name="date_of_join" id="join">
            </div>
            <div class="p-input">
            <label for="status">Status id</label>
            <input required type="number" class="f-input" placeholder="status" name="status_id" id="status">
            </div>
        </div>
        <div class="p-btn">
        <a href="../../Chief/chiefpanel.php"><button class="btn-p btn-cancel">Cancel</button></a>
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