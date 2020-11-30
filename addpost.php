<?php

?>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="images/icon.png" />
    <title>Blog</title>
    <?php require_once ("includes/metadata.php")?>
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="./css/style.css" rel="stylesheet">

</head>
<body>
<?php require_once ("includes/navbar.php")?>

<section class="container">
    <div class="Addpost">
        <h2>Add post</h2>
        <br>
        <form action="includes/addpost.inc.php" method="post">
            <div class="form-group">
                <label for="inputtitle">Title</label>
                <input type="text" name="title" placeholder="Title" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputPostText">Post</label>
                <textarea name="posttekst" cols="30" rows="20"  class="form-control" > </textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
      <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyfealds"){
            echo"<p>Fill all fields</p>";
        }

        else if($_GET["error"] == "none"){
            echo"<p>Added</p>";
        }

    }
    ?>
</section>


<?php require_once ("includes/footer.php")?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>
</html>