<?php

session_start();

include_once '../php/curlsession.php';


// initialize api session
$session = new Api();

//getting crime type

if (!empty(isset($_POST['crime']))) {
    foreach ($_POST['crime'] as $select) {
        // $crime = $select;
        $query = $select; 
    }
}

// //getting crime description

// if (!empty(isset($_POST['description']))) {
//     $describe = $_POST['description'];
// }

// //getting location 
// if (!empty(isset($_POST['location']))) {
//     $locate = $_POST['location'];
// }


// if (!empty($crime)) {
//     $query = $crime;
//     $data = $query;
//     var_dump($query);
// } else if (!empty($describe)) {
//     $query = $describe;
//     var_dump($query);
// } else if (!empty($locate)) {
//     $query = $locate;
//     var_dump($query);
// } else {
//     echo 'Please write something';
// }


// api config
$port = "8080";
$method = "POST";
$api_url = "http://127.0.0.1:8080/api/form/report/search.php?query=${query}";
// setting data to the api
$session->port = $port;
$session->url  = $api_url;
//decode json object
$res = json_decode($session->get_response());

//loop to get the response
$s = $res->body;

 $_SESSION['date'] = $s->report_date;
 $_SESSION['report_time'] = $s->time_of_report;
 $_SESSION['report_type']  =  $s->report_type;
 $_SESSION['location']  =  $s->location;
 $_SESSION['description']  =  $s->description;

var_dump($_SESSION['date']);

    // $date = $s->report_date;
    // $report_time = $s->time_of_report;
    // $type = $s->report_type;
    // $location = $s->location;
    // $description = $s->description;




header('location:http://localhost:3000/watcher/Chief/chiefpanel.php');
