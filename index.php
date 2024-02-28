
<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Home</title>

</head>
<body>
    <h2>TASK MANAGEMENT SYSTEM</h2>
    <a href = "view_task.php">
        <button>MANAGE TASK</button>
    </a>
    <br>
    <table class="table">
        <thead>
            <tr style="background-color: white">
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col" width="200">Priority</th>
            <th scope="col" width="150">Due Date</th>
            </tr>
        </thead>
        <tbody>
            <br>   
<?php 
        include("./config.php");

    $sql = "SELECT * FROM tasks";
    $sql_run = mysqli_query($con, $sql);
    if($sql_run) {
        while($row=mysqli_fetch_assoc($sql_run)) {
            $id = $row["id"];
            $title = $row["title"];
            $description = $row["description"];
            $priority = $row["priority"];
            $due_date = $row["due_date"];

            echo '
            <tr>
            <td>'.$title.'</td>
            <td>'.$description.'</td>
            <td>'.$priority.'</td>
            <td>'.$due_date.'</td>  
            </tr>
                    ';
            }
        }
   
?>
        </tbody>
    </table>
    
</body>
</html>