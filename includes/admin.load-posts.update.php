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
        echo htmlspecialchars($row['post_text']);
        echo "<br>";
        echo htmlspecialchars($row['timestamp']);
        echo "<br>";
        echo "<h5>";
        echo "Id: ";
        echo $row['id'];
        echo'<td><form action="" method="POST">
            <input type="hidden" name="id" value=' . $row['id'] .'>
            <input type="submit" class="btn btn-sm btn-warning" name="edit" value ="edit">
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


