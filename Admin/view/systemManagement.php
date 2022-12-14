<?php
//api endpoin
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
    <div class="system-panel">
        <!-- system nav info -->
        <div class="system-nav">
            <div class="systemnav-info">
                <h1>System Management</h1>
            </div>
        </div>
        <!-- system management info -->
        <div class="system-status">
            <div class="system-elem">
                <h2>Admin</h2>
                <div class="system-c">
                    <div class="system-c-outer">
                        <h1>Account</h1>
                        <?php
                        //admin
                        foreach ($admin_da as $admin) {
                            echo "<span>$admin->user_name</span>";
                        }
                        ?>
                    </div>
                    <div class="system-c-inner">
                        <h1>status</h1>
                        <span>active</span>
                        <span>active</span>
                    </div>
                </div>
            </div>
            <div class="system-elem">
                <h2>Chief</h2>
                <div class="system-c">
                    <div class="system-c-outer">
                        <h1>Account</h1>
                        <?php
                        //chief
                        foreach ($chief_da as $chief) {
                            echo "<span>$chief->user_name</span>";
                        }
                        ?>
                    </div>
                    <div class="system-c-inner">
                        <h1>status</h1>
                        <span>active</span>
                        <span>active</span>
                    </div>
                </div>
            </div>
            <div class="system-elem">
                <h2>User</h2>
                <div class="system-c">
                    <div class="system-c-outer">
                        <h1>Account</h1>
                        <?php
                        //user
                        foreach ($user_da as $user) {
                            echo "<span>$user->user_name</span>";
                        }
                        ?>
                    </div>
                    <div class="system-c-inner">
                        <h1>status</h1>
                        <span>active</span>
                        <span>active</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- system events -->
        <div class="system-contained">
            <div class="system-events">
                <div class="system-title">
                    <h1>Upcoming events</h1>
                    <div class="inner-system">
                        <!-- system will loop here -->
                        <div class="system-container">
                            <div class="system-details">
                                <p>Admin meeting</p>
                                <h5>Sasuke</h5>
                            </div>
                            <span>08/11/2022</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- system  statistics of the system -->
            <div class="system-statistics">
                <!-- chatbar -->
            </div>
        </div>
    </div>
    </div>
</body>
<style>
    @import '/watcher/Style/systemManagement.css';
</style>


