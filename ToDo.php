<?php
$servername ="localhost";
$username = "root";
$password = "";

//Create connection
//new object of mysqli
$conn = new mysqli($servername, $username, $password);

?>

<!DOCTYPE HTML>
<link rel="stylesheet" href="StyleSheet.css" type="text/css">
<html lang = "en">
<head>
    <title>ToDo App by Steven Dilloway</title>
    <meta charset="utf-8"> <!-- UNIVERSAL CHARACTER SET-->
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
    <h1><br><b>Current To Do List</b></h1>
</header>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="ToDo.php">ToDo List</a></li>
        <li><a href="InProgress.php">In Progress</a></li>
        <li><a href="Complete.php">Complete and Past Due</a></li>
    </ul>
</nav>

<div class="form">
    <form action="ToDo.php" method="post">
        <fieldset>
            <p style="padding-left: 25px;"><h3>Please fill out the form below to add a task to your current ToDo List.</h3></p>

                <br>Task Name: <br>
                <input type = "text" name="taskname"><br><br>
                Task Description:<br>
                <textarea name="description" rows="3" width="50%"></textarea><br><br>
                Due Date: <br>
                <input type = "date" name="date"><br><br>
                Status: <br>
                <input type="text" name="status"><br><br><br>
                <input type="submit" name="submit" value="INSERT"><br><br>
        </fieldset>
    </form>

    <br><br>

    <?php
    $sql ="USE ToDoApp";
    $conn->query($sql);

    if(!empty($_POST["taskname"]) && !empty($_POST["description"])
            &&!empty($_POST["date"]) &&!empty($_POST["status"]))
    {
        $query = "INSERT INTO todo (taskName, taskDescription, status, dueDate)
              VALUES ('$_POST[taskname]','$_POST[description]','$_POST[status]','$_POST[date]')";

        $conn->query($query);
    }


   ?>



<br>

<div class="form">
    <fieldset>
        <p style="padding-left: 25px;"><h3>Please select the task you want to delete a task</h3></p>
    <form mothod = "post">

        taskId: <select class="form-dropdown" id="dropdown" name="taskid">
            <?php

            $sql = "SELECT * FROM todo";
            $result = $conn->query($sql);

                echo "<select name='taskId'>";

                while($row=mysqli_fetch_array($result))
                {
                    echo '<option value="' . $row['taskId'] . '">';
                    echo $row['taskId'];
                    echo"</option>";
                }
                       echo "</select>"
            ?>


    </form>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </fieldset>
</div>


<br>

</body>
<footer> <!-- I used this from CSC 3750 for official purposes, hoping this is ok-->
    Copyright &copy 2018 Wayne State University<br />
    <address><a href="Steven@Dilloway.com">warrend@wayne.edu</a></address>
</footer>
</html>