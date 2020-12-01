<?php
include 'includes/dbh.inc.php';
?>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="images/icon.png" />
    <title>Demo</title>
    <?php require_once ("includes/metadata.php")?>
    <!--Bootstrap CDN-->


    <script>
            var postsCount = 2;
            function buttonclick() {
                postsCount = postsCount + 2;
                $("#posts").load("./includes/load-post-none.php",
                {
                    postsNewCount: postsCount
                });
            }

    </script>
    <script>
        function buttonRead() {
            <?php
            echo "value";
            ?>
        }

    </script>

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


</body>
</html>