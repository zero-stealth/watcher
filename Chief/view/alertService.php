<?php session_start();

// api endpoint
$alert_url = "http://127.0.0.1:8080/api/chief/alert/read.php";

$json_data = file_get_contents($alert_url);

$alert_data = json_decode($json_data);

$alert = $alert_data->body;

$alert = array_splice($alert, 0, 1);

?>

<div class="alert-section">
    <div class="alert-title">
        <h1>Send Alerts</h1>
    </div>
    <div class="alert-container">
        <form action="/watcher/include/alert.inc.php" method="post" class="alert-form">
            <input type="text" class="alert-input" name="alert_type" placeholder="Type of alert">
            <input type="text" class="alert-input" name="title" placeholder="The alert title">
            <input type="text" name="details" class="alert-input alert-msg" placeholder="Write your alert" />
            <div class="alert-btn-c">
                <button class="alert-btn" type="submit">Send an alert</button>
            </div>
        </form>
    </div>
    <div class="container-alert">
        <div class="alert-c-title">
            <h1>Alert Management</h1>
        </div>
        <div class="alert-management">
            <?php
            foreach ($alert as $rp) {
                echo "<h1>$rp->title</h1>";
                echo "<h2>$rp->alert_type</h2>";
                echo "<p>$rp->details</p>";   
                // storing id in session            
                $_SESSION["id"] = $rp->id;;
            }
            ?>
            <div class="alert-delete">
                <a href="/watcher/include/alertdelete.inc.php">Remove alert</a>
            </div>
        </div>
    </div>
</div>
<style>
    @import '/watcher/Style/alert.css';
</style>