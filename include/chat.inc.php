<?php
session_start();
include_once '../php/curlsession.php';

//check type of user
function get_user_type()
{
    if ($_SESSION['adminname']) {
        $user_type = 'admin';
    } else if ($_SESSION['chiefname']) {
        $user_type = 'chief';
    } else {
        $user_type = 'user';
    }
    return $user_type;
}

//get the sender
function get_sender()
{
    if ($_SESSION['adminname'] !== '') {
        $sender = $_SESSION['adminname'];
    } else if ($_SESSION['chiefname'] !== '') {
        $sender = $_SESSION['chiefname'];
    } else {
        $sender = $_SESSION['username'];
    }

    return  $sender;
}

//re route to the panel
function reroute($user_type)
{
    switch ($user_type) {
        case 'admin':
            return header('location:/watcher/Admin/adminpanel.php');
        case 'chief':
            return header('location:/watcher/Chief/chiefpanel.php');
        case 'user':
            return header('location:/watcher/User/userpanel.php');
        default:
            echo 'non supported user type';
    }
}



$user = trim(get_user_type());
$reciver_name = trim($_SESSION['chatname']);
$sender_name = trim(get_sender());

if (!empty(isset($_POST))) {

    $message = $_POST;

    $data = json_encode([
        'sender_name' => $sender_name,
        'account_type' => $user,
        'reciver_name' => $reciver_name,
    ] + $message);
}


var_dump($data);

// initialize api session
$session = new Api();

// api config
$port = "8080";
$method = "POST";
$api_url = "http://127.0.0.1:8080/api/form/chat/create.php";

// setting config to the api
$session->port = $port;
$session->data = $data;
$session->url  = $api_url;
$session->method = $method;
$res = json_decode($session->get_response());

var_dump($res);

$message = $res->message;

switch($message) {
    case 'success: chat created';
    reroute($user);
    default:
    echo 'not implemented';
}