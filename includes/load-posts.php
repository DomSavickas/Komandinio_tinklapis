<script src="scripts.js"></script>
<?php
include 'dbh.inc.php';
include '../server.php';
$postsNewCount = $_POST['postsNewCount'];
$sql = "SELECT * FROM blogposts ORDER BY timestamp DESC LIMIT $postsNewCount";
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


