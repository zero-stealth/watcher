<?php

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'index':
        $title = 'Home';
        break;
    case 'adminpanel':
        $title = 'Admin Panel';
        break;
    case 'chiefpanel':
        $title = 'Chief Panel';
        break;
    case 'userpanel':
        $title = 'User Panel';
        break;
    default;
        $title = 'page not found';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/watcher/assets/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <script src="/watcher/js/jquery-3.6.1.min.js"></script>
    <title><?php echo $title ?></title>
</head>
<style>
    @import '/watcher/Style/app.css';
    @import '/watcher/Style/form.css';
    @import '/watcher/Style/panel.css';
    @import '/watcher/Style/index.css';
   
</style>