<?php
include 'includes/dbh.inc.php';
include "server.php";
include 'assets/img/logo.png';
?>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="images/icon.png" />
    <title>Demo</title>
    <?php require_once ("includes/metadata.php")?>
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />




</head>
<body>
<?php require_once ("includes/navbar.php")?>

</br>
<div class="container">
    <div class="form-group">
    <?php
    $postsize = 0;
    $sql = "SELECT * FROM blogposts";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $postsize++;
        }
    }else{
         echo "<p style='htmlspecialchars; font-size: 15pt'>There are no items</p>";
    }
   echo "<p style='htmlspecialchars; font-size: 15pt'>Number of posts in web: $postsize</p>";
    ?>
</div>
</div>


<div class="container">
    <div class="form-group">

    </div>
</div>



<div class = "container">
<div class="form-group" id="posts">
<?php
    $sql = "SELECT * FROM blogposts ORDER BY timestamp DESC LIMIT 2";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "<p>";
            echo "<h2>";
            echo htmlspecialchars($row['title']);
            echo "</h2>";
            echo "<br>";
            $string = $row['post_text'];
            $string = substr($string,0,200);
            echo htmlspecialchars($string);
            echo "...";
            echo "<br>";
            echo $row['timestamp'];
            echo "<br>";
            echo "</p>";
            ?> <div class="post-info">
                <!-- if user likes post, style button differently -->
                <i <?php if (userLiked($row['id'])): ?>
                    class="fa fa-thumbs-up like-btn"
                <?php else: ?>
                    class="fa fa-thumbs-o-up like-btn"
                <?php endif ?>
                        data-id="<?php echo $row['id'] ?>"></i>
                <span class="likes"><?php echo getLikes($row['id']); ?></span>

                &nbsp;&nbsp;&nbsp;&nbsp;

                <!-- if user dislikes post, style button differently -->
                <i
                    <?php if (userDisliked($row['id'])): ?>
                        class="fa fa-thumbs-down dislike-btn"
                    <?php else: ?>
                        class="fa fa-thumbs-o-down dislike-btn"
                    <?php endif ?>
                        data-id="<?php echo $row['id'] ?>"></i>
                <span class="dislikes"><?php echo getDislikes($row['id']); ?></span>
            </div><?php
            echo'<td><form action="post.php" method="POST">

            <input type="hidden" name="id" value=' . $row['id'] .'>
            <input type="submit" class="btn btn-sm btn-primary" name="Read" value ="Read">
            </form></td>';
            ?>
            <hr>
            <?php

        }
    }else{
        echo"There are no items";
    }

?>

</div>

    <input type = "button" class="btn btn-primary" value="More posts" onclick ="buttonclick()" />
</div>
<?php require_once ("includes/footer.php")?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="scripts.js"></script>
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
</body>
</html>