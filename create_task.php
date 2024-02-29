<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Create</title>
</head>
<body>
    <div id ="form">
     <h1>CREATE TASK</h1>
        <form action="process.php" method="post">
            <p>Task Title:</p>
            <input type="text" name="title" width="00">
            <p>Description: </p>
            <textarea id="desc" name="description" rows="4" cols="70"></textarea>
           <p>Priority Level: </p>
            <select name = "priority" id="dropdown">  
                 <option value="Low">Low</option> 
                 <option value="Medium">Medium</option>  
                 <option value="High">High</option> 
            </select> 
            <p>Due Date: </p>
            <input type="date" name="due_date"><br>
            <br>
            <button type="submit" name="create_button"  class="button">Create Task</button> <br><br>
            
        </form><a href="view_task.php" type="button"><button class="button">Cancel</button> </a>
  </div>
            
</body>
</html>
<?php
include "footer.php";
?>