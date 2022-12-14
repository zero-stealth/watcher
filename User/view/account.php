<?php session_start();

$username = $_SESSION["username"];
// api endpoint
$alert_url = "http://127.0.0.1:8080/api/chief/alert/read.php";

$json_data = file_get_contents($alert_url);

$alert_data = json_decode($json_data);

$alert = $alert_data->body;

$alert = array_splice($alert, 0, 2);

?>
<div class="account-settings">
    <div class="account-manager">
        <!-- Alert  section -->
        <div class="container-alert">
            <div class="alert-c-title">
                <h1>Alert Management</h1>
            </div>
            <?php foreach ($alert as $rp) { ?>
            <div class="alert-management">
                <?php
                    echo "<h1>$rp->title</h1>";
                    echo "<h2>$rp->alert_type</h2>";
                    echo "<p>$rp->details</p>";
                    // storing id in session            
                    $_SESSION["id"] = $rp->id;;
                ?>
                <!-- <div class="alert-delete">
                    <a href="#">Remove alert</a>
                </div> -->
            </div>
            <?php } ?>
        </div>
        <!-- account settings -->
        <div class="account-section">
            <h1>Account</h1>
            <div class="c-account-profile">
                <div class="account-managed c-manage">
                    <div class="inner-account">
                        <img src="/watcher/assets/pic03.jpg" alt="account image" class="circle-img inner-img c-img" onclick="updateImg()">
                    </div>
                    <div>
                        <h4> <?php echo $username; ?></h4>
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
                        <input type="text" placeholder="<?php echo $username; ?>" name="username" id="username" class="c-input">
                    </div>
                    <div class="c-btn">
                        <a href="#"><span>Edit</span></a>
                    </div>
                </div>
                <div class="c-part">
                    <div class="c-field">
                        <label for="password" class="c-label">Password</label>
                        <input type="password" placeholder="**********" name="password" id="password" class="c-input">
                    </div>
                    <div class="c-btn">
                        <a href="#"><span>Change</span></a>
                    </div>
                </div>
            </form>
            <div class="c-footer">
                <a href="#"><span>View more</span></a>
                <div class="c-delete-btn">
                    <a href="/watcher/include/accountdelete.php"><span>Delete account</span></a>
                </div>
            </div>
        </div>
    </div>
    <style>
        @import '/watcher/Style/accountManagement.css';
        @import '/watcher/Style/account.css';
        @import '/watcher/Style/alert.css';
    </style>