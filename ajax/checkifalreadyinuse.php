<?php


define('__CONFIG__', true);


require_once "../includes/config.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Always return JSON format
    // header('Content-Type: application/json');

    $return = [];
    $exist = User::Find($_POST['email']);
    if ($exist){
        $return["error"] = "This email already have an account";
    } else{
        $return["status"] = "ok";
    }

    echo json_encode($return, JSON_PRETTY_PRINT); exit;
} else {
    // Die. Kill the script.
    exit('Invalid URL');
}
?>