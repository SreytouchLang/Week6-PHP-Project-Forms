<?php
$cookie_name = "user";
$cookie_value = "Student";

setcookie($cookie_name, $cookie_value, time() + 86400, "/");
?>

<!DOCTYPE html>
<html>
<body>
<h2>Cookie Test</h2>
<?php
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie Value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie is not set.";
}
?>
</body>
</html>
