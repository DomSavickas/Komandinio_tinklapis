<?php


define('__CONFIG__', true);


require_once "../includes/config.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Always return JSON format
    // header('Content-Type: application/json');




    $return = User::addUser($_POST['name'],$_POST['email'],$_POST['username'],$_POST['password']);


    echo json_encode($return, JSON_PRETTY_PRINT); exit;
} else {
    // Die. Kill the script. Redirect the user. Do something regardless.
    exit('Invalid URL');
}
?>