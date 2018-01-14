<?php
$servername ="localhost";
$username = "root";
$password = "";

//Create connection
//new object of mysqli
$conn = new mysqli($servername, $username, $password);
//Check connection
if ($conn -> connect_error){
    die("Failed to connect: " . $conn->connect_error);
}

//Create database
$sql = "CREATE DATABASE IF NOT EXISTS ToDoApp";
if($conn->query($sql) === FALSE){
    echo "Database NOT created" . $conn->error;
}

$sql = "USE ToDoApp";

if($conn->query($sql) === FALSE){
    echo "Database NOT created" . $conn->error;
}


$sql = "CREATE TABLE IF NOT EXISTS ToDo (
  taskId INTEGER AUTO_INCREMENT, 
  taskName VARCHAR(30), 
  taskDescription VARCHAR(140), 
  status VARCHAR(30),
  dueDate DATE, 
  totalTasks INTEGER,
  PRIMARY KEY (taskId))";
if($conn->query($sql) === FALSE){
    echo "Table not created: " . $conn->error;
    echo "<br>";
}

$sql = "CREATE TABLE IF NOT EXISTS Completed (
  taskId INTEGER AUTO_INCREMENT, 
  taskName VARCHAR (30), 
  taskDescription VARCHAR (140), 
  status VARCHAR(30),
  dueDate DATE, 
  totalTasks INTEGER,
  PRIMARY KEY (taskId))";
if($conn->query($sql) === FALSE){
    echo "Table not created: " . $conn->error;
    echo "<br>";
}

$sql = "CREATE TABLE IF NOT EXISTS Late (
  taskId INTEGER AUTO_INCREMENT, 
  taskName VARCHAR (30), 
  taskDescription VARCHAR (140), 
  status VARCHAR (30),
  dueDate DATE, 
  totalTasks INTEGER,
  PRIMARY KEY (taskId))";
if($conn->query($sql) === FALSE){
    echo "Table not created: " . $conn->error;
    echo "<br>";
}

$conn -> close();
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
    <h1><br><b>Welcome to the ToDo Application</b></h1>
</header>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="ToDo.php">ToDo List</a></li>
        <li><a href="InProgress.php">In Progress</a></li>
        <li><a href="Complete.php">Complete and Past Due</a></li>
    </ul>
</nav>

<div class="query">
    <p><h3>Below is a list of the total taks in the system<h3><p></p>
</div>

</body>
<footer> <!-- I used this from CSC 3750 for official purposes, hoping this is ok-->
    Copyright &copy 2018 Wayne State University<br />
    <address><a href="Steven@Dilloway.com">warrend@wayne.edu</a></address>
</footer>
</html>