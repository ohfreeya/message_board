<html>

<head>
    <title>列出所有留言</title>
</head>

<body>
    <center>
        <a href="write.php">寫寫留言</a>
        <?php
        include("db.php");
        /* 查詢欄位資料 */
        $sql = "select * from boarddata order by name desc";  //從guestbook讀取資料並依no欄位做遞減排序
        $result = mysqli_query($con, $sql);
        /* 顯示資料庫資料 */
        while (list($id, $name, $content, $datadate) = mysqli_fetch_row($result)) {
            echo "<br>姓名:" . $name;
            echo "<br>留言內容:" . nl2br($content);
            echo "<br>留言時間:" . $datadate;
        ?>
            <a href="edit.php?id= <?php echo $id; ?>">修改</a>
            <a href="delete.php?id= <?php echo $id; ?>">刪除</a>
            <hr>

        <?php
        }

        echo "共" . mysqli_num_rows($result) . "筆留言";
        ?>
    </center>
</body> 

</html>