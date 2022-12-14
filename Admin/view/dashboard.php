<?php
session_start();

$username = $_SESSION["adminname"];

//chat api endpoint
$chat_url = "http://127.0.0.1:8080/api/form/chat/read.php";

$json_data = file_get_contents($chat_url);

$chat_data = json_decode($json_data);

$chat = $chat_data->body;

$chat = array_splice($chat, 0, 1);

//accounts
$admin_url = "http://127.0.0.1:8080/api/admin/read.php";
$chief_url = "http://127.0.0.1:8080/api/chief/read.php";
$user_url = "http://127.0.0.1:8080/api/user/read.php";

$adminjson_data = file_get_contents($admin_url);
$chiefjson_data = file_get_contents($chief_url);
$userjson_data = file_get_contents($user_url);

$admin_data = json_decode($adminjson_data);
$chief_data = json_decode($chiefjson_data);
$user_data = json_decode($userjson_data);

$admin_d = $admin_data->body;
$chief_d = $chief_data->body;
$user_d = $user_data->body;

$admin_da = array_splice($admin_d, 0, 2);
$chief_da = array_splice($admin_d, 0, 2);
$user_da = array_splice($admin_d, 0, 2);



?>

<body>
    <div class="dashboard-panel">
        <!-- dashboard nav info -->
        <div class="dashboard-nav">
            <div class="dashnav-info">
                <span>Hi <?php echo $username; ?></span>
                <h1>Dashboard</h1>
            </div>
            <div class="profile">
                <img src="/watcher/assets/pic01.jpg" alt="image" class="profile-img circle-img">
                <div class="profile-info">
                    <h3>
                        <?php echo $username; ?>
                    </h3>
                    <h4>admin</h4>
                </div>
            </div>
        </div>
        <!-- dashboard status info -->
        <div class="dash-status color_admin">
            <div class="status-elem">
                <h2>80%</h2>
                <h5>System management</h5>
            </div>
            <div class="status-elem">
                <h2>50%</h2>
                <h5>System proficiency</h5>
            </div>
            <div class="status-elem">
                <h2>100%</h2>
                <h5>System security</h5>
            </div>
            <div class="status-elem">
                <h2>70%</h2>
                <h5>System usability</h5>
            </div>
        </div>
        <!-- small dash -->
        <div class="dash-contained">
            <div class="dash-info">
                <div class="outer-dash">
                    <h1>Account Management</h1>
                    <div class="inner-dash">
                        <div class="inner-info">
                            <h4>Admin</h4>
                            <?php
                            //admin
                            foreach ($admin_da as $admin) {
                                echo "<span>$admin->user_name <br></span>";
                            }
                            ?>
                        </div>
                        <div class="inner-info">
                            <h4>Chief</h4>
                            <?php
                               //chief
                        foreach ($chief_da as $chief) {
                            echo "<span>$chief->user_name <br></span>";
                        }
                            ?>
                        </div>
                        <div class="inner-info">
                            <h4>Chief</h4>
                            <?php
                             //user
                             foreach ($user_da as $user) {
                                echo "<span>$user->user_name<br></span>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chat system -->
            <div class="chat-system">
                <div class="chat-title">
                    <h1>Chat management</h1>
                    <div class="inner-chat">
                        <!-- chat will loop here -->
                        <div class="chat-container">
                            <div class="chat-details">
                                <?php
                                foreach ($chat as $ch) {
                                    echo "<p>$ch->message</p>";
                                    echo "<h5>$ch->sender_name</h5>";
                                    echo "<h5>$ch->account_type</h5>";
                                }
                                ?>
                            </div>
                            <span>12.00 pm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    @import '/watcher/Style/dashboard.css';
</style>