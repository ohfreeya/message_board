<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>修改</title>
</head>

<body>
    <?php
    include("db.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM boarddata WHERE id='$id'";
    $result = mysqli_query($con, $query);
    list($id, $name, $content, $datadate) = mysqli_fetch_row($result);
    ?>

    <form action="modification.php" method="POST">
        暱稱 : <input type="text" value="<?php echo $name ?>" name="name"><br>
        內容 : <textarea name="content" placeholder="<?php echo $content ?>" cols="30" rows="10"></textarea><br>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
    </form>
    
</body>

</html> 