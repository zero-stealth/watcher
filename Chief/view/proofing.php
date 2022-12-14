<?php
session_start();

$username = $_SESSION["chiefname"];

//accounts
$report_url = "http://127.0.0.1:8080/api/form/report/read.php";
$officer_url = "http://127.0.0.1:8080/api/officer/read.php";

$reportjson_data = file_get_contents($report_url);
$officerjson_data = file_get_contents($officer_url);

$report_data = json_decode($reportjson_data);
$officer_data = json_decode($officerjson_data);

$report_d = $report_data->body;
$officer_d = $officer_data->body;

$report = array_splice($report_d, 0, 4);
$officer = array_splice($officer_d, 0, 4);


foreach ($report as $r) {
};
foreach ($officer as $f) {
};

$_SESSION['report_id'] = $r->id;
$_SESSION['officer_id'] = $f->id;



?>

<div class="proofing-container">
    <div class="proofing-title">
        <h1>Cases progress</h1>
    </div>
    <div class="case-roll">
        <div class="roll">
            <?php foreach ($report as $r) { ?>
                <div class="case-container">
                    <div class="case-info">
                        <?php
                        echo "<h1>$r->report_type</h1>";
                        ?>
                    </div>
                    <div class="case-progress">
                        <h1>70%</h1>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="report-container">
            <div class="report-title">
                <h1>Report form</h1>
            </div>
            <div class="report-display-container">
                <div class="r-btn-m">
                    <div class="report-btn">
                        <a href="/watcher/User/forms/report.php">
                            <button class="btn-add">+ Add Report</button>
                        </a>
                        <a class="download">
                            <button class="btn-add">Print Report</button>
                        </a>
                    </div>
                    <div class="report-btn">
                        <a href="/watcher/User/forms/suspectform.php">
                        </a>
                    </div>
                </div>
                <div class="report-display" id="pdf-content">
                    <table id="table-data">
                        <th>Date reported</th>
                        <th>Time reported</th>
                        <th>Crime type</th>
                        <th>Location</th>
                        <th>Gender</th>
                        <th>Crime description</th>
                        <th>Edit/Delete</th>
                        <tr>
                            <?php foreach ($report as $r) { ?>
                                <td><?php echo $r->report_date; ?></td>
                                <td><?php echo $r->time_of_report; ?></td>
                                <td><?php echo $r->report_type; ?></td>
                                <td><?php echo $r->location; ?></td>
                                <td><?php echo $r->gender; ?></td>
                                <td><?php echo $r->description; ?></td>
                                <td>
                                    <div class="report-manager">
                                        <a href="/watcher/User/forms/report.php" class="rm-contain">
                                            <svg class="icon icon-edit" viewBox="0 0 27.710083 29.166016" fill="none" version="1.1" id="svg160" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                                                <path d="m 2.9200439,29.166008 c -0.8,0 -1.49,-0.285 -2.05999995,-0.856 -0.57,-0.571 -0.860000004687,-1.258 -0.860000004687,-2.06 V 2.9160078 c 0,-0.802 0.290000004687,-1.489 0.860000004687,-2.05999999 C 1.4300439,0.28500781 2.1200439,7.8125e-6 2.9200439,7.8125e-6 H 14.590044 l 8.75,8.7499999875 v 4.5200002 l -11.67,11.631 v 4.265 z m 11.6700001,0 v -3.099 l 7.51,-7.547 3.13,3.063 -7.54,7.583 z m 11.7,-8.604 -3.1,-3.099 1.02,-1.021 c 0.29,-0.291 0.65,-0.437 1.06,-0.437 0.41,0 0.75,0.146 1.02,0.437 l 1.02,1.058 c 0.27,0.291 0.4,0.637 0.4,1.038 0,0.401 -0.13,0.736 -0.4,1.003 z m -13.16,-10.354 h 7.29 l -7.29,-7.2920002 z" fill="#009fd1" id="path64" />
                                                <defs id="defs158" />
                                            </svg>

                                        </a>
                                        <a href="/watcher/include/deletereport.php" class="rm-contain">
                                            <svg class="icon icon-delete" viewBox="0 0 23.340088 26.25" fill="none" version="1.1" id="svg160" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                                                <path d="m 4.3800439,26.25 c -0.8,0 -1.49,-0.285 -2.06,-0.856 -0.57,-0.572 -0.86,-1.259 -0.86,-2.061 V 4.375 H 4.3945313e-5 V 1.458 H 7.2900439 V 0 h 8.7500001 v 1.458 h 7.3 v 2.917 h -1.46 v 18.958 c 0,0.802 -0.29,1.489 -0.86,2.061 -0.57,0.571 -1.26,0.856 -2.06,0.856 z m 2.91,-5.833 H 10.210044 V 7.292 H 7.2900439 Z m 5.8400001,0 h 2.91 V 7.292 h -2.91 z" fill="#ea2828" id="path62" />
                                                <defs id="defs158" />
                                            </svg>

                                        </a>
                                    </div>
                                </td>
                        </tr>
                    <?php } ?>
                    </table>
                    <script>
                        // function savetopdf() {
                        //     let data = document.getElementById('#table-data'); 
                        //     window.print(data);
                        // }
                        // $('.download').click(function(){
                        //     $('#table-data').click(savetopdf());
                        // });
                        var buttonElement = document.querySelector(".download");
                        buttonElement.addEventListener('click', function() {
                                    var pdfContent = document.getElementById("pdf-content").innerHTML;
                                    var windowObject = window.open();

                                    windowObject.document.write(pdfContent);

                                    windowObject.print();
                                    windowObject.close();
                        });

                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    /* @import '/watcher/Style/app.css'; */
    @import '/watcher/Style/proofing.css';
</style>