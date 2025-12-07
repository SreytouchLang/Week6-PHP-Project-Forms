<?php
session_start();
if(!isset($_SESSION["loggedin"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Protected Area</h2>
<p>Welcome! You are logged in.</p>
<a href="logout.php">Logout</a>
</body>
</html>
