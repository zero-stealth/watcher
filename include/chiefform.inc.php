<?php

include_once '../php/curlsession.php';


//getting data 
if (!empty($_POST)) { 
    $data = json_encode($_POST);
}

// initialize api session
$session = new Api();

// api config
$port = "8080";
$method = "POST";
$api_url = "http://127.0.0.1:8080/api/chief/create.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;
$session->method = $method;
$res = $session->get_response();


//decode json object
$res = json_decode($session->get_response());

//loop to get the response

foreach( $res as $r) {
    echo "${r}";
};

if($r == 'chief data created successfully') {
    header('location:/watcher/Chief/chiefpanel.php');
} else {
    header('location:/watcher/User/forms/chiefform.php');
}

// switch($r) {
//     case 'chief data created successfully"':
//         header('location:/watcher/Chief/chiefpanel.php');
//         break;
//         default:
//         header('location:/watcher/User/forms/chiefform.php');
//         break;
// }


