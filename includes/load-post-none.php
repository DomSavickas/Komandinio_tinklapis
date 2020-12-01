<?php
include 'dbh.inc.php';
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
