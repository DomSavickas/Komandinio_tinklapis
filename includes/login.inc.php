<?php

if(isset($_POST["submit"])){
    $username = htmlspecialchars($_POST["uid"]);
    $pwd = htmlspecialchars($_POST["pwd"]);

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $pwd) !== false){
        header("location: ../login.php?error=emptyfealds");
        exit();
    }

    loginuser($conn, $username, $pwd);
    setcookie('name', 'admin');
}
else{
    header("location: ../login.php");
    exit();
}