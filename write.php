<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>write something!</title>
</head>

<body>
    <center>
        <a href="view.php">留言列表</a>
        <form name="form1" action="add.php" method="post">
            暱稱 : <input type="text" name="name"><br>
            內容 : <textarea name="content" cols="30" rows="10"></textarea><br>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
    </center>
</body> 

</html>