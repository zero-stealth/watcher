<?php

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'occurrence':
        $title = 'occurrence form';
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
        <form action="../../include/occurrence.inc.php" method="post" class="f-c-p">
        <div class="p-f-details">
        <div class="p-input">
            <label for="crime">occurrence type id</label>
            <input required type="text" class="f-input" placeholder="425445344" name="occurrence_type_id" id="crime">
            </div>
            <div class="p-input">
            <label for="crime">occurrence user id</label>
            <input required type="text" class="f-input" placeholder="223434545" name="occurrence_user_id" id="crime">
            </div>
            <div class="p-input">
            <label for="crime">occurrence number</label>
            <input required type="text" class="f-input" placeholder="32344353" name="occurrence_no" id="crime">
            </div>
            <div class="p-input">
            <label for="date-o">occurrence date</label>
            <input required type="date" class="f-input" placeholder="yyyy/mm/dd" name="occurrence_date" id="date-o">
            </div>  
            <div class="p-input">
            <label for="time-o">occurrence time</label>
            <input required type="time" class="f-input" placeholder="00:00:00" name="occurrence_time" id="time-o">
            </div> 
            <div class="p-input">
            <label for="officer">recording officer id</label>
            <input required type="number" class="f-input" placeholder="2323344" name="recording_officer_id" id="officer">
            </div>
            <div class="p-input">
            <label for="station">station id</label>
            <input required type="text" class="f-input" placeholder="Limuru station" name="station_id" id="station">
            </div>
            <div class="p-input">
            <label for="location">occurrence place</label>
            <input required type="text" class="f-input" placeholder="location" name="occurrence_place" id="location">
            </div>
            <div class="p-input">
            <label for="detail">detail</label>
            <input required type="text" class="a-input" placeholder="explain what occured" name="occurrence_details" id="details">
            </div>
            <div class="p-input">
            <label for="status">Status id</label>
            <input required type="number" class="f-input" placeholder="334455" name="status_id" id="status">
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