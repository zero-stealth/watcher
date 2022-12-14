<?php
session_start();

$username = $_SESSION["username"];

//accounts
$officer_url = "http://127.0.0.1:8080/api/officer/read.php";

$officerjson_data = file_get_contents($officer_url);

$officer_data = json_decode($officerjson_data);

$officer_d = $officer_data->body;

$officer = array_splice($officer_d, 0, 2);


foreach ($officer as $f) {
};

$_SESSION['officer_id'] = $f->id;

//getting report data

$date = $_SESSION['date']; 
$time = $_SESSION['report_time']; 
$type = $_SESSION['report_type']; 
$location = $_SESSION['location']; 
$description = $_SESSION['description']; 



?>

<div class="search-section">
    <div class="s-title">
        <h1>search for a crime</h1>
    </div>
    <div class="search-container">
    <form action="/watcher/include/search.inc.php" method="post" class="f-search">
            <div class="s-c">
                <input type="text" class="s-input" name="crime-des" placeholder="search crime">
            </div>
            <div class="s-c">
                <select class="crime-type" name="crime[]">
                    <option value="" disabled selected>type of crime</option>
                    <option value="Murder">Murder</option>
                    <option value="Assault">Assault</option>
                    <option value="kidnap">Kidnap</option>
                    <option value="Wanted">Wanted</option>
                    <option value="Missing">Missing</option>
                    <option value="Kidnapp">Kidnapp</option>
                </select>
            </div>
            <!-- <div class="s-c">
                <input type="text" class="s-input" name="gender" placeholder="Gender">
            </div> -->
            <div class="s-c">
                <input type="text" class="s-input" name="location" placeholder="location">
            </div>
            <!-- <div class="s-c">
                <input type="text" class="s-input" name="age" placeholder="Age">
            </div> -->
            <div class="s-c-btn">
                <button type="submit" class="s-btn">Search</button>
            </div>
        </form>
    </div>
    <div class="report-container">
        <div class="report-display-container">
            <div class="report-display">
                <table>
                    <th>Date reported</th>
                    <th>Time reported</th>
                    <th>Crime type</th>
                    <th>Location</th>
                    <th>Crime description</th>
                    <th>Officer assign</th>
                    <tr>
                        <td>
                        <?php echo $date; ?></td>
                        <td><?php echo $time; ?></td>
                        <td><?php echo $type; ?></td>
                        <td><?php echo $location; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><?php echo $f->first_name; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    @import '/watcher/Style/search.css';
</style>