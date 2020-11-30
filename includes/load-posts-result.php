<?php
include 'dbh.inc.php';
$postsNewCount = $_POST['postsNewCount'];
if(isset($_POST['submit-search'])){
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM blogposts WHERE title LIKE '%$search%' OR post_text LIKE '%$search%' OR timestamp LIKE '%$search%' ORDER BY timestamp DESC LIMIT 2";
    $result = mysqli_query($conn, $sql);
    $quryResult = mysqli_num_rows($result);

    if($quryResult > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<p>";
            echo "<h2>";
            echo $row['title'];
            echo "</h2>";
            echo "<br>";
            echo $row['post_text'];
            echo "<br>";
            echo $row['timestamp'];
            echo "<br>";
            echo "</p>";
            ?>
            <hr>
            <?php
        }
    }else{
        echo "0 results matching your search";
    }
}



?>


