<?php 

$api_url = "http://127.0.0.1:8080/api/form/report/read.php";

$json_data = file_get_contents($api_url);
$response_data =json_decode($json_data);
$user_data = $response_data->body;
$user_data = array_splice($user_data, 0, 1);

foreach( $user_data as $user) {
    echo $type = $user->report_type;
    echo "<br/>";
    echo $description =  $user->description;

};

?>