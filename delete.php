
    <?php
    header("Location:view.php");
    include("db.php");
    $id = $_GET['id'];
    $query = "DELETE FROM boarddata WHERE id='$id'";
    mysqli_query($con, $query);
    ?>