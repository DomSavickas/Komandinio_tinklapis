<?php
session_start();

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h1><a class="navbar-brand" href="#">
            <img src="images/logo.png" width="200" height="45" alt="">
        </a></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">


            <?php
            if(isset($_SESSION["userid"])){
                //admin
                if($_SESSION["userid"] == 7) {
                    echo"<a class='nav-link' href='index.admin.php'>Home</a>";
                    echo "<li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    Post
                </a>
                <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <a class='dropdown-item' href='addpost.php'>Add post</a>
                    <a class='dropdown-item' href='admin.index.update.php'>Update post</a>
                    
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='admin.index.php'>Delete post</a>
                    </div></li>";
                    echo "<li class='nav-item'>
                <a class='nav-link' href='messages.read.php'>Messages</a></li>";
                    echo "<li class='nav-item'>
                <a class='nav-link' href='admins.php'>All users</a></li>";
                    echo "<li class='nav-item'>
                <a class='nav-link' href='includes/logout.php'>Log out</a></li>";
                }//user
                else{
                    echo"<a class='nav-link' href='index.admin.php'>Home</a>";
                    echo"<a class='nav-link' href='commit_post.php'>Commit post</a>";
                    echo"<a class='nav-link' href='message.php'>Write message</a>";
                    echo "<li class='nav-item'>
                <a class='nav-link' href='includes/logout.php'>Log out</a></li>";
                }
            }
            //none
            else{
                echo"<a class='nav-link' href='index.php'>Home</a>";
                echo "<li class='nav-item'>
                <a class='nav-link' href='signup.php'>Register user</a></li>";
                echo"<a class='nav-link' href='login.php'>Log in</a>";
            }
            ?>

    </div>
</nav>
