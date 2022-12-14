<?php
session_start();
include_once '../php/curlsession.php';




// getting alert id from session 
if (!empty($_SESSION["report_id"] && $_SESSION["officer_id"])) {
    $r_data = json_encode(['id' => $_SESSION["report_id"]]);
    $o_data = json_encode(['id' => $_SESSION["officer_id"]]);
}

function exec_report($r_data)
{

    // initialize api session
    $session = new Api();

    // api config
    $port = "8080";
    $method = "DELETE";
    $api_url = "http://127.0.0.1:8080/api/form/report/delete.php";

    // setting data to the api
    $session->data = $r_data;
    $session->port = $port;
    $session->url  = $api_url;
    $session->method = $method;
    $res = json_decode($session->get_response());

    // var_dump($res);

    //get message 
    return $res->message;
}

function exec_officer($o_data)
{

    // initialize api session
    $session = new Api();

    // api config
    $port = "8080";
    $method = "DELETE";
    $api_url = "http://127.0.0.1:8080/api/officer/delete.php";

    // setting data to the api
    $session->data = $o_data;
    $session->port = $port;
    $session->url  = $api_url;
    $session->method = $method;
    $res = json_decode($session->get_response());

    // var_dump($res);

    //get message 
    return $res->message;
}


exec_report($r_data);
exec_officer($o_data);

if(exec_report($r_data) == 'report deleted' && exec_officer($o_data) == 'officer data deleted: successfully') {

        header('location:/watcher/Chief/chiefpanel.php');

} else {
    echo "<h1>Failured to delete data</h1>";
    header('location:/watcher/Chief/chiefpanel.php');
}
