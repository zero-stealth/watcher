<?php
session_start();

$username = $_SESSION["username"];

//chat api endpoint
$chat_url = "http://127.0.0.1:8080/api/form/chat/read.php";
$report_url = "http://127.0.0.1:8080/api/form/report/read.php";
$complain_url = "http://127.0.0.1:8080/api/form/complain/read.php";

$complainjson_data = file_get_contents($complain_url);
$reportjson_data = file_get_contents($report_url);
$json_data = file_get_contents($chat_url);

$complain_data = json_decode($complainjson_data);
$report_data = json_decode($reportjson_data);
$chat_data = json_decode($json_data);

$chat = $chat_data->body;
$report_d = $report_data->body;
$complain_d = $complain_data->body;


$chat = array_splice($chat, 0, 2);
$report = array_splice($report_d, 0, 2);
$complain = array_splice($complain_d, 0, 3);




foreach ($report as $r) {
};
$_SESSION['report_id'] = $r->id;


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
                <img src="/watcher/assets/pic03.jpg" alt="image" class="profile-img circle-img">
                <div class="profile-info">
                    <h3><?php echo $username; ?></h3>
                    <h4>user</h4>
                </div>
            </div>
        </div>
        <!-- dashboard status info -->
        <div class="dash-status user-dash-status">
            <div class="status-elem user-status-elem">
                <h2>70%</h2>
                <h5>Report management</h5>
            </div>
            <div class="status-elem  user-status-elem">
                <h2>68%</h2>
                <h5>Crimes solved management</h5>
            </div>
            <div class="status-elem  user-status-elem">
                <h2>85%</h2>
                <h5>User satisfaction</h5>
            </div>
            <div class="status-elem  user-status-elem">
                <h2>52%</h2>
                <h5>User's registered</h5>
            </div>
        </div>
        <!-- small dash -->
        <div class="dash-contained">
            <div class="dash-info ">
                <div class="outer-dash">
                    <h1>Most Complains</h1>
                    <div class="inner-dash chief-inner-dash">
                        <div class="inner-info chief-inner-info">
                            <!-- wanted profile -->
                            <?php foreach($complain as $c) {?>
                            <div class="profile">
                                <img src="/watcher/assets/pic06.jpg" alt="image" class="profile-img p-img circle-img">
                                <div class="profile-info user-profile-info">
                                    <?php
                                    echo "<h5>$c->complain</h5>";
                                    echo "<h2>$c->username</h2>";
                                    ?>
                                </div>
                            </div>
                            <?php }?>
                            <!-- end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- chat system -->
            <div class="chat-system user-chat">
                <div class="chat-title user-chat-title">
                    <h1>Crime status</h1>
                    <div class="inner-user-status">
                        <!-- loop cases -->
                        <?php foreach($report as $r) {?>
                        <div class="user-i-c">
                            <div class="user-i">
                                <?php
                                echo "<p>$r->description</p>";
                                echo "<h4>$r->report_type</h4>";
                                ?>

                            </div>
                            <div class="user-s">
                                <h4>ongoing</h4>
                                <div id="active-status">
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <!-- end of loop -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    @import '/watcher/Style/dashboard.css';
</style>