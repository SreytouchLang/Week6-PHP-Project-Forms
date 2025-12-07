<?php
$target_dir = "uploads/";
if(!is_dir($target_dir)) {
    mkdir($target_dir);
}

if(isset($_FILES["image"])) {
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    echo "<h2>Image Uploaded</h2>";
    echo "<img src='$target_file' width='300'>";
}
?>
