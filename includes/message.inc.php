<?php

if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $post_text = $_POST['posttekst'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if(emptyInputMessage($title, $post_text) !== false){
        header("location: ../message.php?error=emptyfealds");
        exit();
    }
    createmessage($conn, $title, $post_text);

}
else{
    header("location: ../message.php");
    exit();
}