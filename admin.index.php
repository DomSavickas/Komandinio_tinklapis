<?php
include 'includes/dbh.inc.php';

if(isset($_REQUEST['submit'])){
    $sql ="DELETE FROM blogposts WHERE id = {$_REQUEST['id']}";
    if(mysqli_query($conn, $sql)){
        echo "Record deleted";
    }else{
        echo "Record not deleted";
    }
}
?>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="images/icon.png" />
    <title>Blog</title>
    <?php require_once ("includes/metadata.php")?>
    <!--Bootstrap CDN-->


    <script type="text/javascript">

            var postsCount = 2;
            function buttonclick() {
                postsCount = postsCount + 2;
                $("#posts").load("./includes/admin.load-posts.php",
                {
                    postsNewCount: postsCount
                });
            }
    </script>

        </head>
<body>
<?php require_once ("includes/navbar.php")?>
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
            echo htmlspecialchars($row['post_text']);
            echo "<br>";
            echo htmlspecialchars($row['timestamp']);
            echo "<br>";
            echo "<h5>";
            echo'<td><form action="" method="POST">
            <input type="hidden" name="id" value=' . $row['id'] .'>
            <input type="submit" class="btn btn-sm btn-danger" name="submit" value ="Delete">
            </form></td>';
            echo "</h5>";
            echo "</p>";
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