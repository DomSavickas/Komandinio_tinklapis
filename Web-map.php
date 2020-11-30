<?php
include 'includes/dbh.inc.php';
?>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="images/icon.png" />
    <title>Blog</title>
    <?php require_once ("includes/metadata.php")?>
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <link href="./css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>

            var postsCount = 2;
            function buttonclick() {
                postsCount = postsCount + 2;
                $("#posts").load("./includes/load-posts.php",
                {
                    postsNewCount: postsCount
                });
            }

    </script>

</head>
<body>
<?php require_once ("includes/navbar.php")?>

<div class="container">
    <div class="form-group">
        <h3>Admin map</h3>
        <br>
        <ul>
            <li><a href="index.php">Home</a></li>
            <br>
            <li><a href="addpost.php">Add post</a></li>
            <li><a href="admin.index.update.php">Update post</a></li>
            <li><a href="admin.index.php">Delete post</a></li>
            <br>
            <br>
            <li><a href="signup.php">Register admin</a></li>
            <br>
            <li><a href="messages.read.php">Messages</a></li>
            <br>
            <li>
                <a href="Web-map.php">Web map</a>
            </li>

            <br>
            <br>
            <li><a href="#">Log out</a></li>
            <ul>
<br>
                <h3>User map</h3>
                <br>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <br>
                    <li><a href="login.php">Login</a></li>
                    <br>
                    <li><a href="message.php">Write message</a></li>
                    <br>
                </ul>
</div>
</div>


<?php require_once ("includes/footer.php")?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>
</html>