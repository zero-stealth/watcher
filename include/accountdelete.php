<?php
session_start();
include_once '../php/curlsession.php';


// getting alert id from session 
if (!empty($_SESSION["admin_id"] || $_SESSION["chief_id"] || $_SESSION["user_id"] )) { 
    $data = json_encode(['id' => $_SESSION["admin_id"] || $_SESSION["chief_id"] || $_SESSION["user_id"]]);
}

// var_dump($data);

// initialize api session
$session = new Api();

// api config
$port = "8080";
$method = "DELETE";
$api_url = "http://127.0.0.1:8080/api/account/delete.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;
$session->method = $method;
$res = json_decode($session->get_response());

// var_dump($res);

//get message 
$data = $res->message;

// print_r($data);

    switch($data) {
        case 'Account deleted successfully':
            header('location:/index.php');
            break;
            default:
            header('location:/index.php');
            break;
    }



