<?php
session_start();
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
$api_url = "http://127.0.0.1:8080/api/account/login.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;

//decode json object
$res = json_decode($session->get_response());


echo $message = $res->message;
echo $account_id = $res->account_id;
echo $username = $res->account_name;

//stroring session username
$_SESSION["chiefname"] = $username;
$_SESSION["chief_id"] = $account_id;

switch($message) {
    case 'login successfully':
        header('location:/watcher/User/forms/chiefform.php');
        break;
        default:
        header('location:/watcher/Chief/Authentication/chieflogin.php');
        break;
}



