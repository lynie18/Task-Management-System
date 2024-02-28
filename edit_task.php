<?php 
    include("./config.php");

    $id = $_GET['edit'];
if(isset($_POST['edit_button'])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
    $due_date = $_POST["due_date"];

    $sql = "UPDATE `tasks`
            SET id='$id',title='$title',description='$description', 
            priority='$priority',due_date='$due_date'
            WHERE id=$id
            ";

    $sql_run = mysqli_query($con, $sql);

    if($sql_run){
        header ("Location: view_task.php");
    } else {
        echo "Error: ". mysqli_error($con);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Edit</title>
</head>
<style>
    body{
        text-align: center;
    }
    button {
        padding: 5px;
        margin: 1px;
    }
</style>
<body>
<div id ="form">
     <h2>EDIT TASK</h2>
        <form method="post">
        <?php 
        $id = $_GET['edit'];
        $sql = "SELECT * FROM `tasks` 
                WHERE id = $id 
                LIMIT 1";
        $sql_run = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($sql_run);
        
        ?>
            <p>Task Title: </p>
        <input type="text" name="title" value="<?php echo $row['title']?>">
        <p>Description: </p>
        <input type="text" name="description" value="<?php echo $row['description']?>">
        <p>Priority Level: </p>
        <select name="priority" id="dropdown">  
            <option value="Low" <?php if($row['priority'] == 'Low') echo 'selected'; ?>>Low</option> 
            <option value="Medium" <?php if($row['priority'] == 'Medium') echo 'selected'; ?>>Medium</option>  
            <option value="High" <?php if($row['priority'] == 'High') echo 'selected'; ?>>High</option> 
        </select><br>
        <p>Due Date: </p>
        <input type="date" name="due_date" value="<?php echo $row['due_date']?>">
        <br><br>
        <button type="submit" name="edit_button">Update</button></form>
        <a href="view_task.php" type="button" id="btn"><button>Cancel</button> </a>
    
  </div>
</body>
</html>
