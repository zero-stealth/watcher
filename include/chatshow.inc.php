<?php

include_once '../php/curlsession.php';

// initialize api session
$session = new Api();

// api config
$port = "8080";
$method = "POST";
$api_url = "http://127.0.0.1:8080/api/form/chat/read.php";

// setting data to the api
$session->port = $port;
$session->url  = $api_url;
$session->method = $method;
$res = json_decode($session->get_response());

var_dump($res);

$d = $res->body;
var_dump($d);

foreach( $d as $food) {
    var_dump( $food);
    "<br/>";
}

// $milk = 'drink';
// $coffee = 'drink';
// $beans = 'beavarage';
// $chocolate = 'beavarage';

// $data = array(
//     "milk" => $milk,
//     "coffee"=>$coffee,
//     "beans" => $beans,
//     "chocolate" => $chocolate,
// );

// $da = json_encode($data); 

// // var_dump("json", $da);

// $d = json_decode($da);

// var_dump("array", $d);

// foreach( $d as $food) {
//     echo $food;
// }