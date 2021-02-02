<?php
header("Location:view.php");
include("db.php");
$name = $_POST["name"];
$content = $_POST["content"];
$sql = "UPDATE boarddata SET content='$content' WHERE name='$name'";
$bool = mysqli_query($con, $sql);
if (!$bool) {
    die("更新失敗" . mysqli_error($con));
}
echo "更新成功";
