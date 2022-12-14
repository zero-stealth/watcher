<?php

$officer_url = "http://127.0.0.1:8080/api/officer/read.php";
$user_url = "http://127.0.0.1:8080/api/user/read.php";

$officerjson_data = file_get_contents($officer_url);
$userjson_data = file_get_contents($user_url);

$officer_data = json_decode($officerjson_data);
$user_data = json_decode($userjson_data);

$officers = $officer_data->body;
$users = $user_data->body;

$officers = array_splice($officers, 0, 3);
$users = array_splice($users, 0, 3);


?>

<div class="account-manager">
<!-- the name & button section -->
<h1>officer management</h1>
<div class="manager-acc-container">
    <div class="manager-btn">
        <button class="btn-manager"><span><a href="/watcher/User/forms/officerform.php">Add Officer</span></a></button>
    </div>
    <!-- the account management section -->
    <div class="manager-section-container">
    <?php foreach ($officers as $officer) {?>
    <div class="manager-section">
<div class="account-managed">
    <div class="inner-account">
        <img src="/watcher/assets/pic03.jpg" alt="account image" class="circle-img inner-img">
    </div>
    <div>
    <h4><?php echo $officer->user_name ?></h4>
    <span>Active</span>
    </div>
</div>
<div>
<a href="#" class="delete"><span>Delete</span></a>
</div>
    </div>
    <?php }?>
    </div>
            <!-- the end account management section -->
</div>

<!-- the name & button section -->
<h1>User management</h1>
<div class="manager-acc-container">
    <div class="manager-btn">
        <button class="btn-manager"><span><a href="/watcher/User/forms/userform.php">Add user</span></a></button>
    </div>
  <!-- the account management section -->
  <div class="manager-section-container">
    <?php foreach ($users as $user) {?>
    <div class="manager-section">
<div class="account-managed">
    <div class="inner-account">
        <img src="/watcher/assets/pic05.jpg" alt="account image" class="circle-img inner-img">
    </div>
    <div>
    <h4><?php echo $user->user_name ?></h4>
    <span>Active</span>
    </div>
</div>
<div>
<a href="#" class="delete"><span>Delete</span></a>
</div>
    </div>
    <?php }?>
        <!-- the end account management section -->
    </div>
<style>
    @import '/watcher/Style/accountManagement.css';
</style>