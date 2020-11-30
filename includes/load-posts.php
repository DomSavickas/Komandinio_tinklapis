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
        echo $row['timestamp'];
        echo "<br>";
        echo "</p>";
        ?>
        <hr>
        <?php

    }
}else{
    echo"There are no items";
}



?>


