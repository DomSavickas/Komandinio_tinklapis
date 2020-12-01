<?php
include 'includes/dbh.inc.php';
?>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="images/icon.png" />
    <title>Blog</title>
    <?php require_once ("includes/metadata.php")?>
    <!--Bootstrap CDN-->

    <link rel="stylesheet" type="text/css" href="css/print.css media="print">

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

</head>
<body>
<?php require_once ("includes/navbar.php")?>


<div class = "container">
<div class="form-group" id="posts">
<?php
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){

            echo "<br>";
            echo "Name: ";
            echo htmlspecialchars($row['usersName']);
            echo "<br>";
            echo "Email: ";
            echo htmlspecialchars($row['usersEmail']);
            echo "<br>";
            echo "Username: ";
            echo htmlspecialchars($row['usersUID']);
            echo "<br>";
            echo "Hashed password: ";
            echo htmlspecialchars($row['usersPWD']);
            echo "<br>";
        }
    }else{
        echo"There are no items";
    }

?>
    <button onclick="window.print()"; class="btn btn-primary id="print-btn">Print</button>

</div>
</div>
<?php require_once ("includes/footer.php")?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>
</html>