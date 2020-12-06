<?php
define('__CONFIG__', true);
?>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="images/icon.png" />
    <title>Blog</title>
    <?php require_once ("includes/metadata.php")?>

</head>
<body>
<?php require_once ("includes/navbar.php")?>
<?php require_once ("includes/config.php")?>


<div class="container">

    <section class="registerform">
    <h2>Register</h2>
    <br>
        <form class="js-register">
            <div class="form-group">
                <label for="inputEmail">Name</label>
                <input type="text" name="name" placeholder="Full name" class="form-control name js-check" required>

            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" name="email" placeholder="Email" class="form-control email" required>
                <div  class="invalid-feedback js-email-error"></div>
            </div>
            <div class="form-group">
                <label for="inputEmail">Username</label>
                <input type="text" name="uid" placeholder="Username" class="form-control username js-check" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" name="pwd" placeholder="Password" class="form-control password" id="passwordImput" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Repeat password</label>
                <input type="password" name="pwdrepeat" placeholder="Repeat password" class="form-control comfirm-password" id="confirmPasswordImput" required>
            </div>
            <div  class="invalid-feedback js-error"></div>
            <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
        </form>
    </section>
</div>

<?php require_once ("includes/footer.php")?>
<script src="assets/js/function.js"></script>


</body>
</html>
