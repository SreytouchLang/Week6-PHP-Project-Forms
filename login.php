<?php
session_start();
include "login.inc.php";

if(isset($_POST["username"]) && isset($_POST["password"])) {
    if($_POST["username"] == $valid_user && $_POST["password"] == $valid_pass) {
        $_SESSION["loggedin"] = true;
        header("Location: protected.php");
        exit();
    } else {
        $error = "Invalid login";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Login Page</h2>
<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>
<?php if(isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
