<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">

    <title>Task Management</title>
</head>
<style>
    body {
        text-align: center;
    }
    table {
        border-collapse: collapse;
        border: 3px solid black;
        width:80%;
        margin-left: 10%;
    }
    th, td {
        border: 1px solid black;
        padding: 3px;
        text-align: center;
    }
    button {
        padding: 3px;
        margin-left: 10px
    }
</style>

<body>
    <h1>List of Tasks</h1>
    
    <hr>
    <table class="table">
        <thead>
            <tr style="background-color: yellowgreen">
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
        <button>Add new task</button> <br><br>
    </a>
    <a href="index.php">
        <button>Back to home</button>
    </a>


    
</body>
</html>