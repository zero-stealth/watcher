<?php

$chief_url = "http://127.0.0.1:8080/api/chief/read.php";
$user_url = "http://127.0.0.1:8080/api/user/read.php";

$chiefjson_data = file_get_contents($chief_url);
$userjson_data = file_get_contents($user_url);

$chief_data = json_decode($chiefjson_data);
$user_data = json_decode($userjson_data);

$chiefs = $chief_data->body;
$users = $user_data->body;

$chiefs = array_splice($chiefs, 0, 3);
$users = array_splice($users, 0, 3);


?>

<div class="account-manager">
<!-- the name & button section -->
<h1>Chief management</h1>
<div class="manager-acc-container">
    <div class="manager-btn">
        <button class="btn-manager"><span><a href="/watcher/User/forms/chiefform.php">Add chief</span></a></button>
    </div>
    <!-- the account management section -->
    <div class="manager-section-container">
    <?php foreach ($chiefs as $chief) {?>
    <div class="manager-section">
<div class="account-managed">
    <div class="inner-account">
        <img src="/watcher/assets/pic03.jpg" alt="account image" class="circle-img inner-img">
    </div>
    <div>
    <h4><?php echo $chief->user_name ?></h4>
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