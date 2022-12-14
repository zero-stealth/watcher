<?php
session_start();

$username = $_SESSION["adminname"];

$admin_url = "http://127.0.0.1:8080/api/admin/read.php";
$adminjson_data = file_get_contents($admin_url);
$admin_data = json_decode($adminjson_data);

$admins = $admin_data->body;
$admins = array_splice($admins, 0, 2);



?>

<div class="account-settings">
    <!-- accounts for admins -->
    <div class="account-manager">
        <!-- the name & button section -->
        <h1>Admin Management</h1>
        <div class="manager-acc-container">
            <div class="manager-btn">
                <button class="btn-manager"><a href="/watcher/User/forms/adminform.php"><span>Add Admin</span></a></button>
            </div>
            <!-- the account management section -->
            <div class="manager-section-container">
                <?php foreach($admins as $admin ) {?>
                <div class="manager-section">
                    <div class="account-managed">
                        <div class="inner-account">
                            <img src="/watcher/assets/pic04.jpg" alt="account image" class="circle-img inner-img">
                        </div>
                        <div>
                            <h4><?php echo $admin->user_name; ?></h4>
                            <span>Active</span>
                        </div>
                    </div>
                    <div>
                        <a href="/watcher/include/accountdelete.php" class="delete"><span>Delete</span></a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <!-- account settings -->
        <div class="account-section">
            <h1>Account</h1>
            <div class="c-account-profile">
                <div class="account-managed c-manage">
                    <div class="inner-account">
                        <img src="/watcher/assets/special-ops.jpg" alt="account image" class="circle-img inner-img c-img" onclick="updateImg()">
                    </div>
                    <div>
                        <h4><?php echo $username ?></h4>
                        <span>Active</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-account">
                <form action="" method="post" class="c-container">
                    <div class="c-part">
                        <div class="c-field">
                        <label for="username" class="c-label">User Name</label>
                        <input type="text" placeholder="<?php echo $username ?>" name="username" id="username" class="c-input">
                        </div>
                        <div class="c-btn">
                            <a href="/watcher/User/forms/chiefform.php"><span>Edit</span></a>
                        </div>
                    </div>
                    <div class="c-part">
                        <div class="c-field">
                        <label for="password" class="c-label">Password</label>
                        <input type="password" placeholder="**********" name="password" id="password" class="c-input">
                        </div>
                        <div class="c-btn">
                            <a href="/watcher/User/forms/chiefform.php"><span>Change</span></a>
                        </div>
                    </div>
                </form>
                <div class="c-footer">
                    <a href="#"><span>View more</span></a>
                    <div class="c-delete-btn">
                        <a href="/watcher/include/admindelete.php"><span>Delete account</span></a>
                    </div>
                </div>
            </div>
    </div>
    <style>
        @import '/watcher/Style/accountManagement.css';
        @import '/watcher/Style/account.css'
    </style>