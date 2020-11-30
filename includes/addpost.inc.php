<?php

if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $post_text = $_POST['posttekst'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if(emptyInputPost($title, $post_text) !== false){
        header("location: ../addpost.php?error=emptyfealds");
        exit();
    }
    createpost($conn, $title, $post_text);

}
else{
    header("location: ../signup.php");
    exit();
}