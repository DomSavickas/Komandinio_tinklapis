<?php




function invalidUid($username){
    $result;
    if(!preg_match('/^[a-zA-Z0-9]*$/', $username)){
        $result = true;
    }else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}


function pwdMatch($pwd, $pwdRepeat){
    $result;
    if($pwd == $pwdRepeat){
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function uidExists($conn, $username, $email){
  $sql = "SELECT * FROM users WHERE `usersUID` = ? OR `usersEmail` = ?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
      header("location: ../signup.php?error=stmtfailed");
      exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($resultData)){
        return $row;
  }
  else{
      $result = false;
      return $result;
  }
    mysqli_stmt_close($stmt);

}

function createUser($conn, $name, $email, $username, $pwd){

    $sql = "INSERT INTO users (usersName, usersEmail, usersUID, usersPWD) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss",$name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginuser($conn, $username, $pwd){
     $uidExists =uidExists($conn, $username, $username);

     if($uidExists === false){
         header("location: ../login.php?error=wronglogin");
         exit();
     }
     $pwdHashed = $uidExists["usersPWD"];
     $checkPwd = password_verify($pwd, $pwdHashed);

     if($checkPwd === false){
         header("location: ../login.php?error=wronglogin");
         exit();
     }
     else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
         $_SESSION["useruid"] = $uidExists["usersUID"];
         header("location: ../index.admin.php");
         exit();
     }
}

function emptyInputPost($title, $post_text){
    $result;
    if (empty($title) || empty($post_text)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function emptyInputMessage($title, $post_text){
    $result;
    if (empty($title) || empty($post_text)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function createpost($conn, $title, $post_text){

    $sql = "INSERT INTO blogposts (title, post_text) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../addpost.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss",$title, $post_text);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addpost.php?error=none");
    exit();
}

function createmessage($conn, $title, $post_text){

    $sql = "INSERT INTO message (email, message_text) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../message.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss",$title, $post_text);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../message.php?error=none");
    exit();
}

