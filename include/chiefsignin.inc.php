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
$api_url = "http://127.0.0.1:8080/api/account/signin.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;
$session->method = $method;
$res = json_decode($session->get_response());

var_dump($res);

$message = $res->message;
$username = $res->account_name;

$_SESSION["chiefname"] = $username;

switch($message) {
    case 'account created':
        header('location:/watcher/User/forms/chiefform.php');
        break;
        default:
        header('location:/watcher/Chief/Authentication/chiefsignin.php');
        break;
}
