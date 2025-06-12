<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require_once 'settings.php';

function database_connection() {
    $host = DATABASE['host'];
    $user = DATABASE['user'];
    $pass = DATABASE['pass'];
    $name = DATABASE['name'];
    return mysqli_connect($host, $user, $pass, $name);
}

?>
<!DOCTYPE html>

<html class="holiday-css-light" lang="ru_RU">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="Task manager" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="src/holiday.css" rel="stylesheet">
    <link rel="shortcut icon" href="src/cat.png" type="image/x-icon">
<?php
