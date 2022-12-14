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
$api_url = "http://127.0.0.1:8080/api/admin/create.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;
$session->method = $method;
$res = json_decode($session->get_response());

// var_dump($res);

//get message 
$data = $res->message;

print_r($data);



switch($data) {
    case 'admin data created successfully':
        header('location:/watcher/Admin/adminpanel.php');
        break;
        default:
        header('location:/watcher/User/forms/adminform.php');
        break;
}



