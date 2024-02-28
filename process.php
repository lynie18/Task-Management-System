<?php 
    include("./config.php");


// ----------------- CREATE ------------------------------//

if(isset($_POST["create_button"])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
    $due_date = $_POST["due_date"];

    $sql = "INSERT INTO tasks (title, description, priority, due_date)
            VALUES ('$title', '$description', '$priority', '$due_date')
            LIMIT 1";

    $sql_run = mysqli_query($con, $sql);
    if($sql_run){
        header ("Location: view_task.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// ----------------- EDIT ------------------------------//

if(isset($_POST["edit_button"])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
    $due_date = $_POST["due_date"];

    $sql = "UPDATE tasks
            SET title='$title', description='$description', 
            priority='$priority', due_date='$due_date',
            WHERE title=$base
            ";

    $sql_run = mysqli_query($con, $sql);

    if($sql_run){
        header ("Location: view_task.php");
    } else {
        echo "Error: ". mysqli_error($con);
    }

}

?>