<?php
include 'includes/dbh.inc.php';
?>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="images/icon.png" />
    <title>Blog</title>
    <?php require_once ("includes/metadata.php")?>
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <link href="./css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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



</div>


<div class = "container">
<div class="form-group" id="posts">
<?php
    $sql = "SELECT * FROM blogposts ORDER BY timestamp DESC";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            if($_POST["id"] == $row['id']){
                $test =  $row['id'] ;
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
            }
        }
    }else{
        echo"There are no items";
    }

?>
    <div class = "container">

        <br />
        <h2 align="center"><a href="#">Comments</a></h2>
        <br />
        <div class="container">
            <form method="POST" id="comment_form">
                <div class="form-group">
                    <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
                </div>
                <div class="form-group">
                    <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="comment_id" id="comment_id" value="0" />
                    <input type="hidden" name="post_id" id="post_id" value= "<?php echo $test?>" />
                    <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                </div>
            </form>
            <span id="comment_message"></span>
            <br />
            <div id="display_comment"></div>
        </div>
    </div>

    <div class = "container">
        <div class="form-group" id="posts">
            <?php
            $test = $_POST["id"];
            $sql = "SELECT * FROM tbl_comment where postid = $test";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<p>";
                    echo "<h2>";
                    echo "Name: ";
                    echo htmlspecialchars($row['comment_sender_name']);
                    echo "</h2>";
                    echo "<br>";
                    echo "Message: ";
                    echo htmlspecialchars($row['comment']);
                    echo "<br>";
                    echo $row['date'];
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
        </div>

</div>
<?php require_once ("includes/footer.php")?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>
</html>


<script>
    $(document).ready(function(){

        $('#comment_form').on('submit', function(event){
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url:"add_comment.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');

                    }
                    location.reload();
                }
            })
        });



        function load_comment()
        {
            $.ajax({
                url:"fetch_comment.php",
                method:"POST",
                success:function(data)
                {
                    $('#display_comment').html(data);
                }
            })
        }

        $(document).on('click', '.reply', function(){
            var comment_id = $(this).attr("id");
            $('#comment_id').val(comment_id);
            $('#comment_name').focus();
        });

    });
</script>