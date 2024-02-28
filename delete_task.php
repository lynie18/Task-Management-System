<?php 
    include("./config.php");

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE from tasks
            WHERE id=$id
            ";
    $sql_run = mysqli_query($con, $sql);
    if($sql_run) {
        header("Location: view_task.php");
    } else {
        echo "Error: ". mysqli_error($con);
    }
}

?>