<?php
session_start();
//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=phpblogsystem', 'root', 'UP1HKsAMV9lTfAP4');

$error = '';
$post_id = $_POST["post_id"];
$comment_name = '';
$comment_content = '';

if(empty($_POST["comment_name"]))
{
    $error .= '<p class="text-danger">Name is required</p>';
}
else
{
    $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
    $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
    $comment_content = $_POST["comment_content"];
}

if($error == '')
{
    if (isset($_SESSION['userid'])) {
        $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment, comment_sender_name, postid) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name, :post_id)
 ";
        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                ':parent_comment_id' => $_POST["comment_id"],
                ':comment' => $comment_content,
                ':comment_sender_name' => $comment_name,
                ':post_id' => $post_id
            )
        );
        $error = '<label class="text-success">Comment Added</label>';
    }
    else {$error .= '<p class="text-danger">Log-in required</p>';}
}

$data = array(
    'error'  => $error
);

echo json_encode($data);

?>
