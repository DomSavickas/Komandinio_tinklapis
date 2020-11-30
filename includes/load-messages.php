<?php
include 'dbh.inc.php';
$postsNewCount = $_POST['postsNewCount'];
$sql = "SELECT * FROM message ORDER BY timestamp DESC LIMIT $postsNewCount";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<p>";
        echo "<h2>";
        echo "Email: ";
        echo htmlspecialchars($row['email']);
        echo "</h2>";
        echo "<br>";
        echo "Message: ";
        echo htmlspecialchars($row['message_text']);
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


