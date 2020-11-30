<?php

$servername = "localhost";
$dbusername= "root";
$dbPassword = "";
$dbName = "phpblogsystem";

$conn = mysqli_connect($servername, $dbusername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

