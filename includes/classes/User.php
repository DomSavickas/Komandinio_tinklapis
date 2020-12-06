<?php
class User {

    private $con;

    public $user_id;
    public $email;
    public $name;
    public $reg_time;

    public function __construct(int $user_id) {
        $this->con = DB::getConnection();

        $user_id = Filter::Int( $user_id );

        $user = $this->con->prepare("SELECT user_id, email, name, reg_time FROM users WHERE user_id = :user_id LIMIT 1");
        $user->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $user->execute();

        if($user->rowCount() == 1) {
            $user = $user->fetch(PDO::FETCH_OBJ);

            $this->email 		= (string) $user->email;
            $this->name 		= (string) $user->name;
            $this->user_id 		= (int) $user->user_id;
            $this->reg_time 	= (string) $user->reg_time;
        } else {
            // No user.
            // Redirect to to logout.
            header("Location: /logout.php"); exit;
        }
    }
    public static function addUser($name, $email, $username, $password){
        $user_found = User::Find($email);
        $return = [];
        $name = Filter::String($name);
        $email = Filter::String($email);
        $username = Filter::String($username);
        if($user_found) {
            // User exists
            $return['error'] = "You already have an account";

        } elseif (User::emptyInputSignup($name, $email, $username, $password)) {
            $return['error'] = "Empty imput";
        }elseif (User::invalidUid($username)) {
            $return['error'] = "Invalid username";
        }elseif(User::invalidEmail($email)){
            $return['error'] = "Invalid email";
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $con = DB::getConnection();
            $addUser = $con->prepare("INSERT INTO users(usersName, usersEmail, usersUID, usersPWD) VALUES(:name,LOWER(:email),:usersUID ,:password)");
            //addUser = $con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
            $addUser->bindParam(':name', $name, PDO::PARAM_STR);
            $addUser->bindParam(':email', $email, PDO::PARAM_STR);
            $addUser->bindParam(':usersUID', $username, PDO::PARAM_STR);
            $addUser->bindParam(':password', $password, PDO::PARAM_STR);
            $addUser->execute();

            $user_id = $con->lastInsertId();

            $_SESSION['userid'] = (int) $user_id;
            $_SESSION['useruid'] = $username;

            $return['redirect'] = '/index.admin.php';
            $return['is_logged_in'] = true;
        }
        return $return;
    }

    private static function logIn(){

    }

    /*function createUser($conn, $name, $email, $username, $pwd){

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
    }*/
    public static function Find($email, $return_assoc = false) {

        $con = DB::getConnection();

        $email = (string) Filter::String( $email );

        $findUser = $con->prepare("SELECT usersId FROM users WHERE usersEmail = LOWER(:email) LIMIT 1");
        $findUser->bindParam(':email', $email, PDO::PARAM_STR);
        $findUser->execute();


        if($return_assoc) {
            return $findUser->fetch(PDO::FETCH_ASSOC);
        }

        $user_found = (boolean) $findUser->rowCount();
        return $user_found;
    }
    private static function emptyInputSignup($name, $email, $username, $pwd){

        if (empty($name) || empty($email) || empty($username) || empty($pwd)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }


    private static function invalidUid($username){

        if(!preg_match('/^[a-zA-Z0-9]*$/', $username)){
            $result = true;
        }else {
            $result = false;
        }

        return $result;
    }

    private static function invalidEmail($email){

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }


    private static function pwdMatch($pwd, $pwdRepeat){

        if($pwd == $pwdRepeat){
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }


}
?>
