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
$api_url = "http://127.0.0.1:8080/api/form/missing/create.php";

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

switch($r) {
    case 'data created successfully':
        header('location:/watcher/User/userpanel.php');
        break;
        default:
        header('location:/watcher/User/forms/missingform.php');
        break;
}


