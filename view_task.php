<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">

    <title>Task Management</title>
</head>
<body>
    <h1>LIST OF TASKS</h1> <br> 
    <hr>
    <a href="index.php">
        <button class="button">Back to home</button>
    </a><br><br>

    <table class="table">
        <thead>
            <tr style="background-color: #b5b0d4">
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col" width="200">Priority</th>
            <th scope="col" width="150">Due Date</th>
            <th scope="col" width="150">Action</th>
            </tr>
        </thead>
        <tbody>
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
            <td>
            <button><a href = "edit_task.php?edit='.$id.'">Update</a></button>
            <button><a href = "delete_task.php?delete='.$id.'">Delete</a></button>
            
            </td>
            </tr>
                    ';
            }
        }
   
?>
        </tbody>
    </table>
    <br><a href = "create_task.php">
        <button class="button">Add new task</button> <br><br>
        
    </a>
    

    
</body>
</html>