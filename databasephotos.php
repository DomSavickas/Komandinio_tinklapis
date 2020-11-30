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


</head>
<body>

<?php require_once ("includes/navbar.php")?>

<div class="container">
    <div class="form-group">
        <ul>
            <br>
            <h4><li><a>Data base name: phpblogsystem</a></li></h4>
            <h5><li><a>Table Users</a></li></h5>
            <a>userId: give registered user id number</a>
            <br>
            <a>usersName: registered user name</a>
            <br>
            <a>usersEmail: registered user email adres</a>
            <br>
            <a>usersUID: registered user username</a>
            <br>
            <a>usersPWD: tegistered user password</a>
            <br>

            <h5><li><a>Table message</a></li></h5>
            <a>id: give messeg id number</a>
            <br>
            <a>message_text: message text</a>
            <br>
            <a>timestamp: time then message was send</a>
            <br>

            <h5><li><a>Table blogposts</a></li></h5>
            <a>id: give post id number</a>
            <br>
            <a>post_text: post text</a>
            <br>
            <a>timestamp: time then post was added</a>
            <br>
        </ul>

        <br>
        <br>
            <img src="images/db1.png">
        <br>
            <img src="images/db2.png">
        <br>
            <img src="images/db3.png">
        <br>
            <img src="images/db4.png">
        <br>



    </div>
</div>

</div>
<?php require_once ("includes/footer.php")?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>
</html>