<!DOCTYPE html>
<html>
<head>
    <title>Form with JavaScript Validation</title>
    <script>
        function validateForm() {
            let name = document.getElementById("name").value;
            if(name == "") {
                alert("Name is required!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<h2>Simple Form</h2>
<form method="post" onsubmit="return validateForm();">
    Name: <input type="text" id="name" name="name">
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Hello, " . htmlspecialchars($_POST["name"]) . "!</p>";
}
?>
</body>
</html>
