<?php
header("Location:view.php");
include("db.php");
$name = $_POST["name"];
$content = $_POST["content"];
$sql = "INSERT boarddata (name,content,datadate) VALUES ('$name','$content',now())";
mysqli_query($con, $sql);
?>